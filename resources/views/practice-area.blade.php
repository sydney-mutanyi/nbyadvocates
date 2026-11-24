@extends('layouts.app')

@section('title', 'Practice Area')

@section('content')
@php
$areas = [
    'commercial' => [
        'title' => 'Commercial Law',
        'description' => 'We advise businesses of all sizes; start-ups, SMEs and corporations, on the full spectrum of commercial matters.',
        'details' => 'We advise businesses of all sizes; start-ups, SMEs and corporations, on the full spectrum of commercial matters. This includes drafting, negotiating and reviewing contracts, supplier and distribution agreements, terms of trade, non-disclosure agreements and commercial leases. Our team supports clients in regulatory compliance, data protection (GDPR), consumer law, intellectual property rights and franchising. Whether you\'re launching a new product, entering joint ventures, managing partnerships or handling commercial disputes, we tailor solutions to your sector and strategy. We combine legal expertise with digital tools and technology-powered analytics to accelerate contract review, identify risk and optimise outcomes. From initial advice to ongoing regulatory updates and dispute resolution, NB Yaseen Advocates offers the commercial acumen and technological edge businesses need to stay competitive in an increasingly complex marketplace.',
        'services' => ['Companies', 'Insolvency', 'Partnerships', 'Mergers & Acquisitions', 'Commercial Agreements', 'Movable Property Security Rights', 'Financial Services & Payment Systems', 'Taxation']
    ],
    'conveyancing' => [
        'title' => 'Conveyancing',
        'description' => 'Our Conveyancing service covers residential and commercial property transactions; from sale and purchase to transfer of leases, mortgages, lease extensions and more.',
        'details' => 'Our Conveyancing service covers residential and commercial property transactions; from sale and purchase to transfer of leases, mortgages, lease extensions and more. We manage every step of the process, from title investigations to registration. Our team ensures smooth transactions with attention to detail and clear communication throughout the process.',
        'services' => ['Property Sale & Purchase', 'Transfer of Leases', 'Mortgages', 'Lease Extensions', 'Title Investigations', 'Property Registration']
    ],
    'probate' => [
        'title' => 'Probate & Administration',
        'description' => 'Navigating probate and estate administration after bereavement can be emotionally taxing. NB YASEEN supports executors, beneficiaries and grieving families through each stage.',
        'details' => 'Navigating probate and estate administration after bereavement can be emotionally taxing. NB YASEEN supports executors, beneficiaries and grieving families through each stage. We are particularly keen on registering deaths, validating wills, grants of probate or letters of administration, estate valuation & asset distribution, and dealing with regulatory authorities. We offer compassionate guidance and digital convenience: online document requests, secure portals and automated progress updates. Our use of technology-driven systems helps identify assets, flag tax obligations and streamline reporting. We also advise on contentious probate disputes, claims under the Succession and Matrimonial Property Acts, contested wills, executor duties or alleged mis-administration. Whether you hold a simple will or face a complex estate, our dedicated team delivers both legal rigour and empathetic support, working remotely or in-office to settle affairs efficiently and respectfully.',
        'services' => ['Death Registration', 'Will Validation', 'Grants of Probate', 'Letters of Administration', 'Estate Valuation', 'Asset Distribution', 'Contentious Probate Disputes']
    ],
    'family' => [
        'title' => 'Family Law',
        'description' => 'Our legal firm provides a full-spectrum family law services. All solutions are tailored to your unique situation, whether amicable resolution, mediation or court proceedings.',
        'details' => 'FAMILY LAW\n\nOur legal firm provides a full-spectrum family law services. All solutions are tailored to your unique situation, whether amicable resolution, mediation or court proceedings. We prioritise collaborative, digitally enhanced processes: online intake forms that are readily available on our website, video meetings and secure document sharing. Our AI-augmented systems help analyse financial evidence quickly, prepare parenting plans and ensure compliance with legislation. Our family law services cover the following:\n\n• Divorce & financial settlements\n• Children matters\n• Cohabitation disputes\n• Domestic violence \n• Pre- and post-nuptial agreements.\n\nImportantly, we offer sensitive, client-focused advice, promoting constructive settlement where possible and robust advocacy where necessary. For complex scenarios such as international relocation, non-resident parent issues and undue influence claims, our experienced team combines legal insight, cross-jurisdictional liaison and technological efficiency to pursue the best outcomes with respect and professionalism.',
        'services' => ['Divorce & Financial Settlements', 'Children Matters', 'Cohabitation Disputes', 'Domestic Violence', 'Pre- and Post-nuptial Agreements']
    ],
    'criminal' => [
        'title' => 'Criminal Litigation',
        'description' => 'Our criminal litigation service covers all police-led investigations and prosecutions, from minor offences to serious indictable matters.',
        'details' => 'Our criminal litigation service covers all police-led investigations and prosecutions, from minor offences to serious indictable matters. NB YASEEN represents clients in the following matters, and more:\n\n• Traffic offences\n• Assault\n• Fraud & theft\n• Drug-related charges\n• Public order offences\n• Trans-national & organized crimes\n\nWe provide immediate support, interact with police, prepare representations, apply for bail and litigate vigorously in courts. Our digital tools case-handling software, online evidence management, and video conferencing ensure swift, accurate case preparation. Technology-driven analysis aids disclosure review, flagging relevant documents and witness material. We fight to protect client rights at every stage, from custody to sentence and appeals, offering transparent communication and strategic defence.',
        'services' => ['Traffic Offences', 'Assault', 'Fraud & Theft', 'Drug-related Charges', 'Public Order Offences', 'Trans-national Crimes']
    ],
    'employment-disputes' => [
        'title' => 'Employment Disputes',
        'description' => 'By virtue of our great insights into national and international labour laws and other instruments, our employment law service supports both employers and employees with individual and collective disputes.',
        'details' => 'By virtue of our great insights into national and international labour laws and other instruments, our employment law service supports both employers and employees with individual and collective disputes. For employees, contact us if necessary in the following cases: unfair dismissal, wrongful termination, discrimination, harassment, wage disputes, contract breaches, workplace safety issues, redundancy disputes, and constructive dismissal. For employers, we provide guidance on disciplinary procedures, performance management, workplace policies, employment contracts, termination processes, compliance with labour laws, and dispute resolution strategies.',
        'services' => ['Unfair Dismissal', 'Wrongful Termination', 'Discrimination', 'Harassment', 'Wage Disputes', 'Contract Breaches', 'Redundancy Disputes']
    ],
    'civil-litigation' => [
        'title' => 'Civil Litigation',
        'description' => 'NB YASEEN Advocates offers comprehensive litigation services across an array of civil matters in the Kenyan court system.',
        'details' => 'NB YASEEN offers comprehensive litigation services across an array of civil matters in the Kenyan court system, including, but not limited to: creditors\' claims, debt recovery, professional negligence, landlord-tenant disputes, breach of contract, personal injury, and property disputes. We guide clients through litigation strategy, ADR options, witness statements, disclosure and court forms. Our digital case-management system tracks key deadlines, case documents and court bundles. AI systems help us quickly and accurately identify relevant Kenyan and foreign case law, calculate damages and assess risk. We aim to resolve disputes efficiently through proactive case management and, where appropriate, negotiated settlement, while preparing firmly for trial if needed.',
        'services' => ['Creditors\' Claims', 'Debt Recovery', 'Professional Negligence', 'Landlord-Tenant Disputes', 'Breach of Contract', 'Personal Injury', 'Property Disputes']
    ],
    'company-law' => [
        'title' => 'Company Law',
        'description' => 'We assist start-ups, growing businesses and established Kenyan and foreign companies with a wide range of services',
        'details' => 'We assist start-ups, growing businesses and established Kenyan and foreign companies with a wide range of services including incorporation & corporate governance, conducting due diligence for investment or acquisition, restructuring, shareholder agreements, directorships, legal & regulatory compliance, and managing share transfers. Our digital client portals allow collaborative drafting and approvals, while technology-driven compliance checking flags regulatory obligations. Our approach is strategic: aligning corporate structure with business objectives, future-proofing for growth, and ensuring smooth transitions when raising capital or exiting.',
        'services' => ['Incorporation & Corporate Governance', 'Due Diligence', 'Restructuring', 'Shareholder Agreements', 'Directorships', 'Legal & Regulatory Compliance', 'Share Transfers']
    ],
    'mediation' => [
        'title' => 'Mediation',
        'description' => 'At NB YASEEN, we promote early dispute resolution through professionally-mediated negotiation, offering mediation services alongside representation in family, commercial, employment and civil disputes.',
        'details' => 'At NB YASEEN, we promote early dispute resolution through professionally-mediated negotiation, offering mediation services alongside representation in family, commercial, employment and civil disputes. Our mediators are trained and accredited, blending legal knowledge, facilitative skills and technological tools to conduct online or—where preferred—face-to-face sessions. We use secure video platforms, shared digital workspaces and AI tools that help clarify positions, generate settlement options and draft mediated agreements on the spot. Mediation reduces time, cost and emotional strain, often preserving professional or personal relationships. Whether under court-mandated obligations (e.g. family or civil cases) or by mutual consent, our mediation service empowers parties to resolve disputes constructively and confidentially, guided by skilled neutral facilitation.',
        'services' => ['Family Dispute Mediation', 'Commercial Dispute Mediation', 'Employment Dispute Mediation', 'Civil Dispute Mediation', 'Online Mediation Sessions', 'Face-to-Face Mediation']
    ],
    'islamic-law' => [
        'title' => 'Islamic Law',
        'description' => 'Expert guidance on matters of Islamic personal law in Kenya',
        'details' => 'The Constitution of Kenya (2010) established Kadhis Courts to determine specific matters relating to people who profess the Islamic faith. The specific areas include personal status, marriage, divorce, and inheritance. At NB YASEEN ADVOCATES, we have team members who will guide and represent you in questions of Muslim law relating to these matters.',
        'services' => ['Personal Status', 'Marriage', 'Divorce', 'Inheritance', 'Kadhis Court Representation']
    ],
    'general-practice' => [
        'title' => 'General Practice',
        'description' => 'NB YASEEN ADVOCATES provides legal services across a broad range of practice areas. Think of us as your legal equivalent of a family doctor.',
        'details' => 'NB YASEEN ADVOCATES provides legal services across a broad range of practice areas. Think of us as your legal equivalent of a family doctor. We serve as your primary legal resource; whether you are an individual, group of persons, big or small business - handling your day-to-day legal issues.',
        'services' => ['Day-to-Day Legal Issues', 'General Legal Consultation', 'Legal Advice for Individuals', 'Legal Advice for Businesses']
    ],
    'legal-due-diligence' => [
        'title' => 'Legal Due Diligence',
        'description' => 'Turn to NB YASEEN ADVOCATES to hedge your business against avoidable risk and uncertainty. Our Legal Due Diligence Audit and Risk Management services are designed to give you clarity, confidence, and control over your business operations.',
        'details' => 'Turn to NB YASEEN ADVOCATES to hedge your business against avoidable risk and uncertainty. Our Legal Due Diligence Audit and Risk Management services are designed to give you clarity, confidence, and control over your business operations. We conduct in-depth assessments of your organization\'s legal standing, identifying potential liabilities, compliance gaps, and hidden risks. Whether you are preparing for an investment, merger, acquisition, or expansion, our professional approach ensures that no critical detail is overlooked. To our Kenyan, regional and international clients, we make it our duty to go beyond identifying risks to help you anticipate and manage them. From regulatory compliance to contractual obligations and operational exposures, we provide actionable strategies that protect your business and strengthen resilience. Well aware that every organization is unique, we customize our audits and risk management frameworks to align with your industry, size, and strategic goals, ensuring practical and effective outcomes. For your due diligence and risk management needs, contact NB YASEEN ADVOCATES today to secure your organization\'s future with confidence.',
        'services' => ['Legal Standing Assessment', 'Compliance Gap Analysis', 'Risk Identification', 'Investment Due Diligence', 'Merger & Acquisition Support', 'Regulatory Compliance Review', 'Operational Exposure Analysis']
    ],
];

$area = $areas[$slug] ?? null;
@endphp

@if(!$area)
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-red-50 border border-red-200 rounded-lg p-8 text-center">
            <h2 class="text-2xl font-bold text-red-800 mb-2">Practice Area Not Found</h2>
            <p class="text-red-600 mb-4">The practice area you're looking for doesn't exist.</p>
            <a href="{{ route('home') }}" class="inline-block bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-colors">Return Home</a>
        </div>
    </div>
@else
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Breadcrumb -->
    <nav class="mb-8">
        <ol class="flex items-center space-x-2 text-sm">
            <li><a href="{{ route('home') }}" class="text-red-600 hover:text-red-700">Home</a></li>
            <li class="text-gray-400">/</li>
            <li class="text-gray-600">{{ $area['title'] }}</li>
        </ol>
    </nav>

    <!-- Header -->
    <div class="mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $area['title'] }}</h1>
        <p class="text-xl text-gray-600 mb-6">{{ $area['description'] }}</p>
        <div class="w-24 h-1 bg-red-600 mb-6"></div>
        <p class="text-lg text-gray-500 max-w-2xl">Comprehensive legal solutions tailored to your unique needs, delivered with expertise and dedication.</p>
    </div>

    <!-- Details -->
    <div class="prose max-w-none mb-12">
        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-100">
            <p class="text-lg text-gray-700 whitespace-pre-line">{{ $area['details'] }}</p>
        </div>
    </div>

    <!-- Services -->
    @if(!empty($area['services']))
    <div class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Services Include</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($area['services'] as $service)
            <div class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                <svg class="h-5 w-5 text-red-600 mt-0.5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-700">{{ $service }}</span>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- CTA -->
    <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-lg p-8 text-white text-center">
        <h2 class="text-2xl font-bold mb-4">Need Legal Assistance?</h2>
        <p class="mb-6 text-red-100">Our experienced team is ready to help you with your legal matters.</p>
        <a href="{{ route('contact-form') }}" class="inline-block bg-white text-red-600 font-bold px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors">
            Instruct Us
        </a>
    </div>
</div>
@endif
@endsection
