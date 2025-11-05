<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisaController extends Controller
{
    // Work Visas
    public function workVisas()
    {
        return view('visas.work-visas');
    }

    public function h1bVisa()
    {
        $pageTitle = "H1B Visa - Specialty Occupation Workers";
        $metaDescription = "Learn about the H1B visa for specialty occupation workers. Get expert guidance on eligibility, application process, and requirements.";

        return view('visas.h1b-visa', compact('pageTitle', 'metaDescription'));
    }

    public function l1Visa()
    {
        $pageTitle = "L1 Visa - Intracompany Transfer";
        $metaDescription = "Comprehensive guide to L1 visa for intracompany transfers. Expert assistance with L1A and L1B visa applications.";

        return view('visas.l1-visa', compact('pageTitle', 'metaDescription'));
    }

    public function tnVisa()
    {
        $pageTitle = "TN Visa - USMCA Professionals";
        $metaDescription = "Expert guidance on TN visa for Canadian and Mexican professionals under USMCA. Fast processing and professional support.";

        return view('visas.tn-visa', compact('pageTitle', 'metaDescription'));
    }

    public function h2bVisa()
    {
        $pageTitle = "H2B Visa - Temporary Non-Agricultural Workers";
        $metaDescription = "Get help with H2B visa applications for temporary non-agricultural workers. Expert consultation and filing assistance.";

        return view('visas.h2b-visa', compact('pageTitle', 'metaDescription'));
    }

    public function e3Visa()
    {
        $pageTitle = "E3 Visa - Australian Specialty Occupation Workers";
        $metaDescription = "E3 visa for Australian professionals in specialty occupations. Expert guidance through the application process.";

        return view('visas.e3-visa', compact('pageTitle', 'metaDescription'));
    }

    // Student Visas
    public function studentVisas()
    {
        return view('visas.student-visas');
    }

    public function f1Visa()
    {
        $pageTitle = "F1 Visa - Academic Student Visa";
        $metaDescription = "Complete guide to F1 student visa. Get expert help with your F1 visa application for academic studies in the United States.";

        return view('visas.f1-visa', compact('pageTitle', 'metaDescription'));
    }

    public function m1Visa()
    {
        $pageTitle = "M1 Visa - Vocational Student Visa";
        $metaDescription = "M1 visa for vocational and non-academic programs. Professional guidance for your vocational training in the U.S.";

        return view('visas.m1-visa', compact('pageTitle', 'metaDescription'));
    }

    public function j1Visa()
    {
        $pageTitle = "J1 Visa - Exchange Visitor Program";
        $metaDescription = "J1 exchange visitor visa for educational and cultural exchange programs. Expert consultation for students, researchers, and trainees.";

        return view('visas.j1-visa', compact('pageTitle', 'metaDescription'));
    }

    // Business & Investor Visas
    public function businessInvestorVisas()
    {
        return view('visas.business-investor-visas');
    }

    public function e2Visa()
    {
        $pageTitle = "E2 Visa - Treaty Investor Visa";
        $metaDescription = "E2 investor visa for entrepreneurs and business investors. Expert guidance on investment requirements and application process.";

        return view('visas.e2-visa', compact('pageTitle', 'metaDescription'));
    }

    public function e1Visa()
    {
        $pageTitle = "E1 Visa - Treaty Trader Visa";
        $metaDescription = "E1 treaty trader visa for international trade businesses. Professional assistance with eligibility and application.";

        return view('visas.e1-visa', compact('pageTitle', 'metaDescription'));
    }

    public function eb5Visa()
    {
        $pageTitle = "EB5 Visa - Immigrant Investor Program";
        $metaDescription = "EB5 immigrant investor visa leading to green card. Expert guidance on investment requirements and regional center options.";

        return view('visas.eb5-visa', compact('pageTitle', 'metaDescription'));
    }

    // Family-Based Visas
    public function familyVisas()
    {
        return view('visas.family-visas');
    }

    public function k1Visa()
    {
        $pageTitle = "K1 Visa - Fiancé Visa";
        $metaDescription = "K1 fiancé visa for marriage-based immigration. Expert assistance with petition filing and interview preparation.";

        return view('visas.k1-visa', compact('pageTitle', 'metaDescription'));
    }

    public function k3Visa()
    {
        $pageTitle = "K3 Visa - Spouse of U.S. Citizen";
        $metaDescription = "K3 visa for spouses of U.S. citizens awaiting immigrant visa availability. Professional filing and consultation services.";

        return view('visas.k3-visa', compact('pageTitle', 'metaDescription'));
    }

    public function cr1Ir1Visa()
    {
        $pageTitle = "CR1/IR1 Visa - Spouse Immigrant Visa";
        $metaDescription = "CR1 and IR1 immigrant visas for spouses of U.S. citizens. Get permanent residency through marriage with expert guidance.";

        return view('visas.cr1-ir1-visa', compact('pageTitle', 'metaDescription'));
    }

    public function ir5Visa()
    {
        $pageTitle = "IR5 Visa - Parent of U.S. Citizen";
        $metaDescription = "IR5 visa for parents of U.S. citizens. Expert assistance with family-based immigration petitions.";

        return view('visas.ir5-visa', compact('pageTitle', 'metaDescription'));
    }

    // Tourist & Visitor Visas
    public function touristVisitorVisas()
    {
        return view('visas.tourist-visitor-visas');
    }

    public function b1B2Visa()
    {
        $pageTitle = "B1/B2 Visa - Business and Tourist Visa";
        $metaDescription = "B1/B2 visitor visa for business and tourism. Expert guidance on application process and interview preparation.";

        return view('visas.b1-b2-visa', compact('pageTitle', 'metaDescription'));
    }

    public function b1Visa()
    {
        $pageTitle = "B1 Visa - Business Visitor Visa";
        $metaDescription = "B1 business visitor visa for temporary business activities in the U.S. Professional consultation and application support.";

        return view('visas.b1-visa', compact('pageTitle', 'metaDescription'));
    }

    public function b2Visa()
    {
        $pageTitle = "B2 Visa - Tourist Visitor Visa";
        $metaDescription = "B2 tourist visa for pleasure, vacation, and medical treatment. Expert assistance with visa application and documentation.";

        return view('visas.b2-visa', compact('pageTitle', 'metaDescription'));
    }

    // Special Category Visas
    public function specialVisas()
    {
        return view('visas.special-visas');
    }

    public function p1Visa()
    {
        $pageTitle = "P1 Visa - Athletes and Entertainers";
        $metaDescription = "P1 visa for internationally recognized athletes and entertainment groups. Expert guidance for sports and entertainment professionals.";

        return view('visas.p1-visa', compact('pageTitle', 'metaDescription'));
    }

    public function r1Visa()
    {
        $pageTitle = "R1 Visa - Religious Workers";
        $metaDescription = "R1 visa for religious workers and ministers. Professional assistance with religious worker visa applications.";

        return view('visas.r1-visa', compact('pageTitle', 'metaDescription'));
    }

    public function iVisa()
    {
        $pageTitle = "I Visa - Foreign Media and Journalists";
        $metaDescription = "I visa for foreign media representatives and journalists. Expert consultation for press and media visa applications.";

        return view('visas.i-visa', compact('pageTitle', 'metaDescription'));
    }

    public function uVisa()
    {
        $pageTitle = "U Visa - Crime Victims";
        $metaDescription = "U visa for victims of certain crimes who assist law enforcement. Compassionate guidance through the U visa application process.";

        return view('visas.u-visa', compact('pageTitle', 'metaDescription'));
    }
}
