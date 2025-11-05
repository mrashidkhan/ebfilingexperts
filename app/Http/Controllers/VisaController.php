<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisaController extends Controller
{
    // ====================================
    // WORK VISAS CATEGORY
    // ====================================

    public function workVisas()
    {
        $pageTitle = "Work Visas - Employment-Based US Visas";
        $metaDescription = "Explore work visa options for the United States including H1B, L1, TN, H2B, and E3 visas. Expert guidance for your employment-based immigration.";

        return view('visas.work.index', compact('pageTitle', 'metaDescription'));
    }

    public function h1bVisa()
    {
        $pageTitle = "H1B Visa - Specialty Occupation Workers";
        $metaDescription = "Learn about the H1B visa for specialty occupation workers. Get expert guidance on eligibility, application process, and requirements.";

        return view('visas.work.h1b', compact('pageTitle', 'metaDescription'));
    }


/**
 * Display the H-2A Temporary Agricultural Worker Visa page.
 *
 * @return \Illuminate\View\View
 */
public function h2aVisa()
{
    $pageTitle = "H2A Visa - Agriculture Workers";
        $metaDescription = "Learn about the H2A visa for specialty occupation workers. Get expert guidance on eligibility, application process, and requirements.";

        return view('visas.work.h2a', compact('pageTitle', 'metaDescription'));
}

    public function l1Visa()
    {
        $pageTitle = "L1 Visa - Intracompany Transfer";
        $metaDescription = "Comprehensive guide to L1 visa for intracompany transfers. Expert assistance with L1A and L1B visa applications.";

        return view('visas.work.l1', compact('pageTitle', 'metaDescription'));
    }

    public function tnVisa()
    {
        $pageTitle = "TN Visa - USMCA Professionals";
        $metaDescription = "Expert guidance on TN visa for Canadian and Mexican professionals under USMCA. Fast processing and professional support.";

        return view('visas.work.tn', compact('pageTitle', 'metaDescription'));
    }

    public function h2bVisa()
    {
        $pageTitle = "H2B Visa - Temporary Non-Agricultural Workers";
        $metaDescription = "Get help with H2B visa applications for temporary non-agricultural workers. Expert consultation and filing assistance.";

        return view('visas.work.h2b', compact('pageTitle', 'metaDescription'));
    }

    public function e3Visa()
    {
        $pageTitle = "E3 Visa - Australian Specialty Occupation Workers";
        $metaDescription = "E3 visa for Australian professionals in specialty occupations. Expert guidance through the application process.";

        return view('visas.work.e3', compact('pageTitle', 'metaDescription'));
    }

    // ====================================
    // STUDENT VISAS CATEGORY
    // ====================================

    public function studentVisas()
    {
        $pageTitle = "Student Visas - Study in the United States";
        $metaDescription = "Complete guide to US student visas including F1, M1, and J1. Expert assistance for academic and vocational study programs.";

        return view('visas.student.index', compact('pageTitle', 'metaDescription'));
    }

    public function f1Visa()
    {
        $pageTitle = "F1 Visa - Academic Student Visa";
        $metaDescription = "Complete guide to F1 student visa. Get expert help with your F1 visa application for academic studies in the United States.";

        return view('visas.student.f1', compact('pageTitle', 'metaDescription'));
    }

    public function m1Visa()
    {
        $pageTitle = "M1 Visa - Vocational Student Visa";
        $metaDescription = "M1 visa for vocational and non-academic programs. Professional guidance for your vocational training in the U.S.";

        return view('visas.student.m1', compact('pageTitle', 'metaDescription'));
    }

    public function j1Visa()
    {
        $pageTitle = "J1 Visa - Exchange Visitor Program";
        $metaDescription = "J1 exchange visitor visa for educational and cultural exchange programs. Expert consultation for students, researchers, and trainees.";

        return view('visas.student.j1', compact('pageTitle', 'metaDescription'));
    }

    // ====================================
    // BUSINESS & INVESTOR VISAS CATEGORY
    // ====================================

    public function businessInvestorVisas()
    {
        $pageTitle = "Business & Investor Visas - Entrepreneurship in the US";
        $metaDescription = "Explore business and investor visa options including E2, E1, and EB5. Expert guidance for entrepreneurs and investors.";

        return view('visas.business.index', compact('pageTitle', 'metaDescription'));
    }

    public function e2Visa()
    {
        $pageTitle = "E2 Visa - Treaty Investor Visa";
        $metaDescription = "E2 investor visa for entrepreneurs and business investors. Expert guidance on investment requirements and application process.";

        return view('visas.business.e2', compact('pageTitle', 'metaDescription'));
    }

    public function e1Visa()
    {
        $pageTitle = "E1 Visa - Treaty Trader Visa";
        $metaDescription = "E1 treaty trader visa for international trade businesses. Professional assistance with eligibility and application.";

        return view('visas.business.e1', compact('pageTitle', 'metaDescription'));
    }

    public function eb5Visa()
    {
        $pageTitle = "EB5 Visa - Immigrant Investor Program";
        $metaDescription = "EB5 immigrant investor visa leading to green card. Expert guidance on investment requirements and regional center options.";

        return view('visas.business.eb5', compact('pageTitle', 'metaDescription'));
    }

    // ====================================
    // FAMILY-BASED VISAS CATEGORY
    // ====================================

    public function familyVisas()
    {
        $pageTitle = "Family-Based Visas - Unite with Loved Ones";
        $metaDescription = "Complete guide to family-based immigration visas including K1, K3, CR1/IR1, and IR5. Reunite with family in the United States.";

        return view('visas.family.index', compact('pageTitle', 'metaDescription'));
    }

    public function k1Visa()
    {
        $pageTitle = "K1 Visa - Fiancé Visa";
        $metaDescription = "K1 fiancé visa for marriage-based immigration. Expert assistance with petition filing and interview preparation.";

        return view('visas.family.k1', compact('pageTitle', 'metaDescription'));
    }

    public function k3Visa()
    {
        $pageTitle = "K3 Visa - Spouse of U.S. Citizen";
        $metaDescription = "K3 visa for spouses of U.S. citizens awaiting immigrant visa availability. Professional filing and consultation services.";

        return view('visas.family.k3', compact('pageTitle', 'metaDescription'));
    }

    public function cr1Ir1Visa()
    {
        $pageTitle = "CR1/IR1 Visa - Spouse Immigrant Visa";
        $metaDescription = "CR1 and IR1 immigrant visas for spouses of U.S. citizens. Get permanent residency through marriage with expert guidance.";

        return view('visas.family.cr1-ir1', compact('pageTitle', 'metaDescription'));
    }

    public function ir5Visa()
    {
        $pageTitle = "IR5 Visa - Parent of U.S. Citizen";
        $metaDescription = "IR5 visa for parents of U.S. citizens. Expert assistance with family-based immigration petitions.";

        return view('visas.family.ir5', compact('pageTitle', 'metaDescription'));
    }

    // ====================================
    // TOURIST & VISITOR VISAS CATEGORY
    // ====================================

    public function touristVisitorVisas()
    {
        $pageTitle = "Tourist & Visitor Visas - Travel to the United States";
        $metaDescription = "Complete guide to US tourist and visitor visas including B1, B2, and B1/B2. Expert assistance for your US travel plans.";

        return view('visas.tourist.index', compact('pageTitle', 'metaDescription'));
    }

    public function b1B2Visa()
    {
        $pageTitle = "B1/B2 Visa - Business and Tourist Visa";
        $metaDescription = "B1/B2 visitor visa for business and tourism. Expert guidance on application process and interview preparation.";

        return view('visas.tourist.b1-b2', compact('pageTitle', 'metaDescription'));
    }

    public function b1Visa()
    {
        $pageTitle = "B1 Visa - Business Visitor Visa";
        $metaDescription = "B1 business visitor visa for temporary business activities in the U.S. Professional consultation and application support.";

        return view('visas.tourist.b1', compact('pageTitle', 'metaDescription'));
    }

    public function b2Visa()
    {
        $pageTitle = "B2 Visa - Tourist Visitor Visa";
        $metaDescription = "B2 tourist visa for pleasure, vacation, and medical treatment. Expert assistance with visa application and documentation.";

        return view('visas.tourist.b2', compact('pageTitle', 'metaDescription'));
    }

    // ====================================
    // SPECIAL CATEGORY VISAS
    // ====================================

    public function specialVisas()
    {
        $pageTitle = "Special Category Visas - Unique Immigration Options";
        $metaDescription = "Explore special category visas including P1, R1, I, and U visas. Expert guidance for unique immigration situations.";

        return view('visas.special.index', compact('pageTitle', 'metaDescription'));
    }

    public function p1Visa()
    {
        $pageTitle = "P1 Visa - Athletes and Entertainers";
        $metaDescription = "P1 visa for internationally recognized athletes and entertainment groups. Expert guidance for sports and entertainment professionals.";

        return view('visas.special.p1', compact('pageTitle', 'metaDescription'));
    }

    public function r1Visa()
    {
        $pageTitle = "R1 Visa - Religious Workers";
        $metaDescription = "R1 visa for religious workers and ministers. Professional assistance with religious worker visa applications.";

        return view('visas.special.r1', compact('pageTitle', 'metaDescription'));
    }

    public function iVisa()
    {
        $pageTitle = "I Visa - Foreign Media and Journalists";
        $metaDescription = "I visa for foreign media representatives and journalists. Expert consultation for press and media visa applications.";

        return view('visas.special.i', compact('pageTitle', 'metaDescription'));
    }

    public function uVisa()

    {
        $pageTitle = "U Visa - Crime Victims";
        $metaDescription = "U visa for victims of certain crimes who assist law enforcement. Compassionate guidance through the U visa application process.";

        return view('visas.special.u', compact('pageTitle', 'metaDescription'));
    }
}
