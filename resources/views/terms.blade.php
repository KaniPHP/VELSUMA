@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); color: white; padding: 80px 20px; text-align: center;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">Terms & Conditions</h1>
        <p style="font-size: 18px; color: #ecf0f1; line-height: 1.6;">Welcome to Velsuma. These Terms & Conditions govern your access to and use of our website, products, services, and business interactions.</p>
    </div>
</section>

<section style="padding: 60px 20px; background: white; color: #333;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
            By accessing our website or engaging with our services, you acknowledge that you have read, understood, and agreed to comply with these Terms & Conditions. If you do not agree with any part of these Terms, please discontinue the use of our website and services immediately.
        </p>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Definitions</h2>
        <div style="margin-bottom: 30px;">
            <p><strong>Company</strong><br>Refers to Velsuma and its affiliates, representatives, employees, and authorized partners.</p>
            <p><strong>Customer</strong><br>Refers to any individual, business entity, architect, contractor, dealer, distributor, or organization engaging with Velsuma.</p>
            <p><strong>Products</strong><br>Refers to all products supplied, distributed, or marketed by Velsuma, including but not limited to Modular Kitchens, Soffit Panels, SPC Flooring, Wall Cladding Solutions, and related interior and exterior products.</p>
            <p><strong>Services</strong><br>Refers to consultation, design assistance, project support, product supply, installation guidance, and other services offered by Velsuma.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Eligibility</h2>
        <div style="margin-bottom: 30px;">
            <p>Our products and services are available to:</p>
            <ul style="margin-left: 20px; line-height: 1.8;">
                <li>Individuals aged 18 years or older.</li>
                <li>Legally registered businesses and organizations.</li>
                <li>Architects, builders, contractors, dealers, distributors, and project developers.</li>
            </ul>
            <p>By using our services, you confirm that all information provided is accurate and complete.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Product Consultation & Orders</h2>
        <div style="margin-bottom: 30px;">
            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Product Consultation</h3>
            <p style="margin-bottom: 20px;">Customers may request product recommendations, technical guidance, or project consultations based on their specific requirements.</p>

            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Quotations</h3>
            <p style="margin-bottom: 20px;">All quotations provided by Velsuma are subject to availability, pricing revisions, transportation costs, and applicable taxes unless otherwise specified.</p>

            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Order Confirmation</h3>
            <p style="margin-bottom: 20px;">Orders will be processed only after confirmation from the customer and receipt of applicable advance payments where required.</p>

            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Pricing</h3>
            <p>Prices are subject to change without prior notice due to market conditions, material costs, freight charges, or supplier revisions.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Product Supply & Delivery</h2>
        <div style="margin-bottom: 30px;">
            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Delivery Timeline</h3>
            <p style="margin-bottom: 20px;">Velsuma strives to deliver products within the estimated schedule. However, delivery timelines may vary due to:</p>
            <ul style="margin-left: 20px; line-height: 1.8; margin-bottom: 20px;">
                <li>Transportation delays</li>
                <li>Natural calamities</li>
                <li>Government restrictions</li>
                <li>Supply chain disruptions</li>
                <li>Unforeseen operational circumstances</li>
            </ul>

            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Inspection Upon Delivery</h3>
            <p style="margin-bottom: 20px;">Customers are advised to inspect products at the time of delivery. Any visible damages, shortages, or discrepancies must be reported within 48 hours of receipt.</p>

            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Ownership</h3>
            <p>Ownership of supplied products remains with Velsuma until full payment has been received.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Installation & Usage</h2>
        <div style="margin-bottom: 30px;">
            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Installation Responsibility</h3>
            <p style="margin-bottom: 20px;">Unless specifically agreed in writing, installation services are not included with product purchases. Customers are responsible for ensuring that products are installed by qualified professionals following industry standards and manufacturer recommendations.</p>

            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Product Performance</h3>
            <p>Product performance may vary depending on:</p>
            <ul style="margin-left: 20px; line-height: 1.8; margin-bottom: 20px;">
                <li>Site conditions</li>
                <li>Installation quality</li>
                <li>Environmental factors</li>
                <li>Maintenance practices</li>
            </ul>
            <p>Velsuma shall not be held responsible for issues arising from improper installation, misuse, neglect, or unauthorized modifications.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Product Warranty</h2>
        <div style="margin-bottom: 30px;">
            <p style="margin-bottom: 20px;">Certain products may carry manufacturer-backed warranties.</p>
            <p style="margin-bottom: 20px;">Warranty coverage does not include:</p>
            <ul style="margin-left: 20px; line-height: 1.8; margin-bottom: 20px;">
                <li>Improper installation</li>
                <li>Physical damage</li>
                <li>Accidental damage</li>
                <li>Water leakage caused by structural defects</li>
                <li>Misuse or negligence</li>
                <li>Normal wear and tear</li>
                <li>Unauthorized repairs or alterations</li>
            </ul>
            <p>Specific warranty details shall be provided where applicable.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Returns & Cancellations</h2>
        <div style="margin-bottom: 30px;">
            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Order Cancellation</h3>
            <p style="margin-bottom: 20px;">Orders may be cancelled only before dispatch and may be subject to administrative or processing charges.</p>
            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Custom Orders</h3>
            <p style="margin-bottom: 20px;">Customized, made-to-order, or specially procured products cannot be cancelled or refunded once production or procurement has commenced.</p>
            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Returns</h3>
            <p>Returns will only be accepted if approved by Velsuma after product inspection and verification.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Intellectual Property</h2>
        <div style="margin-bottom: 30px;">
            <p>All website content, product images, brochures, catalogs, logos, trademarks, designs, graphics, and marketing materials remain the exclusive property of Velsuma. Unauthorized copying, reproduction, distribution, or commercial use is strictly prohibited.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Privacy & Data Protection</h2>
        <div style="margin-bottom: 30px;">
            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Information Collection</h3>
            <p style="margin-bottom: 20px;">Velsuma may collect customer information including:</p>
            <ul style="margin-left: 20px; line-height: 1.8; margin-bottom: 20px;">
                <li>Name</li>
                <li>Contact details</li>
                <li>Email address</li>
                <li>Project information</li>
                <li>Business information</li>
            </ul>
            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Usage of Information</h3>
            <p style="margin-bottom: 20px;">Collected information may be used for:</p>
            <ul style="margin-left: 20px; line-height: 1.8; margin-bottom: 20px;">
                <li>Customer support</li>
                <li>Product inquiries</li>
                <li>Order processing</li>
                <li>Marketing communications</li>
                <li>Service improvements</li>
            </ul>
            <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Data Security</h3>
            <p>We implement reasonable technical and administrative measures to safeguard customer information against unauthorized access, misuse, or disclosure.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Limitation of Liability</h2>
        <div style="margin-bottom: 30px;">
            <p>To the maximum extent permitted by law, Velsuma shall not be liable for:</p>
            <ul style="margin-left: 20px; line-height: 1.8; margin-bottom: 20px;">
                <li>Indirect losses</li>
                <li>Business interruption</li>
                <li>Loss of profits</li>
                <li>Delays caused by third parties</li>
                <li>Consequential damages arising from the use of our products or services</li>
            </ul>
            <p>Our total liability shall not exceed the value of the product or service purchased by the customer.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Business Opportunity & Partnership Programs</h2>
        <div style="margin-bottom: 30px;">
            <p>Dealerships, distributorships, franchise opportunities, and business partnerships offered by Velsuma may be subject to separate agreements, eligibility criteria, investment requirements, and operational guidelines. Participation in such programs does not guarantee profits, business growth, or market success.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Governing Law</h2>
        <div style="margin-bottom: 30px;">
            <p>These Terms & Conditions shall be governed by and interpreted in accordance with the laws of India. Any disputes arising from the use of Velsuma’s products or services shall be subject to the jurisdiction of the competent courts.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Amendments</h2>
        <div style="margin-bottom: 30px;">
            <p>Velsuma reserves the right to modify, update, or revise these Terms & Conditions at any time without prior notice. Continued use of our website, products, or services after any modifications constitutes acceptance of the revised Terms.</p>
        </div>

        <h2 style="font-size: 28px; font-weight: 700; margin-top: 40px; margin-bottom: 20px; color: #2c3e50;">Contact Information</h2>
        <div style="margin-bottom: 30px;">
            <p>For questions regarding these Terms & Conditions, please contact:</p>
            <p style="font-weight: 600;">Velsuma</p>
            <p>Email: info@velsuma.com</p>
            <p>Phone: +91 XXXXX XXXXX</p>
            <p>Customer Support Hours: Monday – Saturday | 9:30 AM – 6:30 PM</p>
        </div>

        <p style="font-size: 16px; line-height: 1.8; margin-top: 40px;">By accessing our website or engaging with our products and services, you acknowledge that you have read, understood, and agreed to these Terms & Conditions.</p>
    </div>
</section>
@endsection
