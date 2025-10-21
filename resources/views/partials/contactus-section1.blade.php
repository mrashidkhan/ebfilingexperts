<section class="about-us-section-style1 bg-no-repeat bg-cover bg-pos-cb bg-silver contact-us-calendar-widget"
    style="background-image: url('assets/images/bg/abs-bg1.png'); background-size: cover; background-position: center bottom;" data-overlay-light="3" id="calendar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-auto">
                <div class="contact-us-calendar-tabs">
                    <div class="booking-widget" style="max-width: 600px; margin: 0 auto; background: white; border-radius: 8px; padding: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <h2 style="text-align: center; margin-bottom: 30px; color: #333;">Schedule a Meeting</h2>

                        <!-- Calendar -->
                        <div id="calendar-container" style="margin-bottom: 30px;">
                            <div style="text-align: center; margin-bottom: 20px;">
                                <button id="prev-month" style="padding: 8px 12px; margin-right: 10px; background: #f0f0f0; border: 1px solid #ddd; cursor: pointer; border-radius: 4px;">← Prev</button>
                                <span id="month-year" style="font-weight: bold; font-size: 16px; display: inline-block; min-width: 150px;"></span>
                                <button id="next-month" style="padding: 8px 12px; margin-left: 10px; background: #f0f0f0; border: 1px solid #ddd; cursor: pointer; border-radius: 4px;">Next →</button>
                            </div>

                            <!-- Calendar Grid -->
                            <div id="calendar-grid" style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 8px; margin-bottom: 20px;">
                            </div>
                        </div>

                        <!-- Time Slots -->
                        <div id="time-slots-container" style="display: none; margin-bottom: 30px;">
                            <h4 style="margin-bottom: 15px; color: #333;">Available Times (30-minute slots)</h4>
                            <div id="time-slots" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
                            </div>
                        </div>

                        <!-- Form -->
                        <form id="booking-form" style="display: none; border-top: 1px solid #eee; padding-top: 20px;">
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 500; color: #333;">Full Name *</label>
                                <input type="text" id="name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                            </div>
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 500; color: #333;">Email *</label>
                                <input type="email" id="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                            </div>
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 500; color: #333;">Phone *</label>
                                <input type="tel" id="phone" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                            </div>
                            <div style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 500; color: #333;">Message</label>
                                <textarea id="message" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; resize: vertical; min-height: 80px;"></textarea>
                            </div>
                            <button type="submit" style="width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; font-weight: 600; cursor: pointer;">Confirm Booking</button>
                        </form>

                        <!-- Success Message -->
                        <div id="success-message" style="display: none; background: #d4edda; color: #155724; padding: 15px; border-radius: 4px; text-align: center;">
                            <strong>Booking Confirmed!</strong><br>
                            You will receive a confirmation email shortly.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Calendar Management
    let currentDate = new Date();
    let selectedDate = null;
    let selectedTime = null;

    const availableTimes = [
        '09:00 AM', '09:30 AM', '10:00 AM', '10:30 AM',
        '11:00 AM', '11:30 AM', '02:00 PM', '02:30 PM',
        '03:00 PM', '03:30 PM', '04:00 PM', '04:30 PM'
    ];

    // Initialize calendar
    function initCalendar() {
        renderCalendar();
    }

    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const daysInMonth = lastDay.getDate();
        const startingDayOfWeek = firstDay.getDay();

        // Update month/year display
        document.getElementById('month-year').textContent =
            currentDate.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });

        // Clear previous calendar
        const calendarGrid = document.getElementById('calendar-grid');
        calendarGrid.innerHTML = '';

        // Add day headers
        const dayHeaders = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        dayHeaders.forEach(day => {
            const dayHeader = document.createElement('div');
            dayHeader.textContent = day;
            dayHeader.style.cssText = 'font-weight: bold; text-align: center; padding: 10px; color: #666;';
            calendarGrid.appendChild(dayHeader);
        });

        // Add empty cells for days before month starts
        for (let i = 0; i < startingDayOfWeek; i++) {
            const emptyCell = document.createElement('div');
            calendarGrid.appendChild(emptyCell);
        }

        // Add day cells
        for (let day = 1; day <= daysInMonth; day++) {
            const dayCell = document.createElement('button');
            dayCell.textContent = day;
            dayCell.type = 'button';

            const cellDate = new Date(year, month, day);
            const isToday = cellDate.toDateString() === new Date().toDateString();
            const isPast = cellDate < new Date();

            dayCell.style.cssText = `
                padding: 10px;
                border: 1px solid #ddd;
                background: ${isToday ? '#e7f3ff' : 'white'};
                cursor: ${isPast ? 'not-allowed' : 'pointer'};
                opacity: ${isPast ? '0.5' : '1'};
                border-radius: 4px;
                font-weight: ${isToday ? 'bold' : 'normal'};
                transition: all 0.3s;
            `;

            if (!isPast) {
                dayCell.onmouseover = () => dayCell.style.background = '#f0f0f0';
                dayCell.onmouseout = () => dayCell.style.background = isToday ? '#e7f3ff' : 'white';

                dayCell.onclick = () => selectDate(cellDate, dayCell);
            } else {
                dayCell.disabled = true;
            }

            calendarGrid.appendChild(dayCell);
        }
    }

    function selectDate(date, element) {
        selectedDate = date;
        document.querySelectorAll('#calendar-grid button').forEach(btn => {
            btn.style.background = btn === element ? '#007bff' : 'white';
            btn.style.color = btn === element ? 'white' : 'black';
        });

        renderTimeSlots();
        document.getElementById('time-slots-container').style.display = 'block';
    }

    function renderTimeSlots() {
        const timeSlotsContainer = document.getElementById('time-slots');
        timeSlotsContainer.innerHTML = '';

        availableTimes.forEach(time => {
            const timeBtn = document.createElement('button');
            timeBtn.textContent = time;
            timeBtn.type = 'button';
            timeBtn.style.cssText = `
                padding: 10px;
                border: 1px solid #ddd;
                background: white;
                cursor: pointer;
                border-radius: 4px;
                transition: all 0.3s;
            `;

            timeBtn.onmouseover = () => timeBtn.style.background = '#f0f0f0';
            timeBtn.onmouseout = () => timeBtn.style.background = selectedTime === time ? '#007bff' : 'white';

            timeBtn.onclick = () => {
                selectedTime = time;
                document.querySelectorAll('#time-slots button').forEach(btn => {
                    btn.style.background = btn === timeBtn ? '#007bff' : 'white';
                    btn.style.color = btn === timeBtn ? 'white' : 'black';
                });
                document.getElementById('booking-form').style.display = 'block';
            };

            timeSlotsContainer.appendChild(timeBtn);
        });
    }

    // Month navigation
    document.getElementById('prev-month').onclick = () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    };

    document.getElementById('next-month').onclick = () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    };

    // Form submission
    document.getElementById('booking-form').onsubmit = (e) => {
        e.preventDefault();

        const bookingData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,
            message: document.getElementById('message').value,
            date: selectedDate.toLocaleDateString(),
            time: selectedTime
        };

        // Here you would send to your backend
        console.log('Booking submitted:', bookingData);

        // Show success message
        document.getElementById('booking-form').style.display = 'none';
        document.getElementById('time-slots-container').style.display = 'none';
        document.getElementById('success-message').style.display = 'block';

        // Reset after 3 seconds
        setTimeout(() => {
            location.reload();
        }, 3000);
    };

    // Initialize on load
    window.onload = initCalendar;
</script>
