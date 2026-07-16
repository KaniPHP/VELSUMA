@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="faq-hero-section" style="background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; padding: 80px 20px; text-align: center;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 class="faq-hero-title" style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">Frequently Asked Questions</h1>
        <p style="font-size: 18px; color: #1f3a5d; line-height: 1.6;">Answers to common questions about Velsuma products and services</p>
    </div>
</section>

<!-- FAQ Content -->
<section class="faq-section" style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 900px; margin: 0 auto;">
        <!-- FAQ Item 1 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 class="faq-question-title" style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    Which modular kitchen package is best for my home?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    The ideal package depends on your budget, usage, and finish expectations. Platinum and Gold packages are suitable for luxury modern interiors, while Silver and Bronze packages are designed for practical and budget-friendly kitchen solutions. Our team can help you choose the perfect match for your needs.
                </p>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    What is the difference between Platinum, Gold, Silver, and Bronze packages?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    Each package differs based on board quality, laminate range, profile systems, acrylic finishes, color variants, and overall finishing standards. Higher packages include more premium materials, advanced finishes, and additional design options. Platinum offers the highest luxury level, while Bronze provides budget-friendly functionality.
                </p>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    Which board material is best for modular kitchens?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    BWP plywood and premium HDHMR materials are considered ideal for modular kitchens because they provide excellent durability, moisture resistance, and long-lasting performance. BWP (Boiling Waterproof) is particularly popular for kitchen applications due to its ability to withstand humidity and moisture.
                </p>
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    What is BWP material in modular kitchens?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    BWP stands for Boiling Waterproof plywood. It offers high moisture resistance and is widely preferred for premium modular kitchen applications. This material can withstand exposure to water and humidity, making it ideal for kitchen environments where moisture levels are typically higher.
                </p>
            </div>
        </div>

        <!-- FAQ Item 5 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    Are acrylic modular kitchens better than laminate kitchens?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    Both have distinct advantages. Acrylic kitchens provide a glossy, premium appearance and modern luxury aesthetics, while laminate kitchens are durable, cost-effective, and available in multiple texture options. The choice depends on your design preference, maintenance requirements, and budget.
                </p>
            </div>
        </div>

        <!-- FAQ Item 6 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    Can I customize my modular kitchen layout?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    Yes. Every Velsuma modular kitchen is fully customized based on your kitchen size, storage requirements, cooking habits, and interior preferences. We work closely with you to design the perfect layout for your space and lifestyle.
                </p>
            </div>
        </div>

        <!-- FAQ Item 7 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    Which modular kitchen layout is best?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0; margin-bottom: 15px;">
                    Popular layouts include:
                </p>
                <ul style="font-size: 14px; color: #666; line-height: 1.8; margin: 0; margin-left: 20px;">
                    <li>• L-Shaped Kitchen – Ideal for larger spaces with multiple work zones</li>
                    <li>• U-Shaped Kitchen – Maximum storage and workspace</li>
                    <li>• Parallel Kitchen – Perfect for narrow galley-style spaces</li>
                    <li>• Straight Kitchen – Excellent for compact apartments</li>
                    <li>• Island Kitchen – Premium option for spacious homes</li>
                </ul>
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 15px 0 0 0;">The best layout depends on your available space and workflow requirements.</p>
            </div>
        </div>

        <!-- FAQ Item 8 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    Are Velsuma modular kitchens waterproof?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    Our kitchens use premium moisture-resistant materials like BWP and HDHMR boards designed to withstand everyday kitchen environments and humidity conditions. The finishes also provide additional water resistance for long-lasting protection.
                </p>
            </div>
        </div>

        <!-- FAQ Item 9 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    How long does a modular kitchen last?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    With proper maintenance and quality materials, a modular kitchen can easily last for many years while maintaining its functionality and appearance. Velsuma kitchens are built to withstand the test of time with premium components and expert installation.
                </p>
            </div>
        </div>

        <!-- FAQ Item 10 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    Do you provide modular kitchen installation services?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    Yes. Velsuma provides complete modular kitchen installation support, including site measurement, planning, production, and final execution. Our experienced team ensures professional installation with attention to detail and finishing quality.
                </p>
            </div>
        </div>

        <!-- FAQ Item 11 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    Can modular kitchens be designed for small spaces?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    Absolutely. Modular kitchens are ideal for both compact apartments and spacious luxury homes because they maximize storage and improve space utilization efficiently. We specialize in creating smart solutions for spaces of all sizes.
                </p>
            </div>
        </div>

        <!-- FAQ Item 12 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    How do I choose the right modular kitchen finish?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    The right finish depends on your interior style, lighting, maintenance preference, and overall design expectation. Our team helps you select the best laminate, acrylic, profile, and color combinations for your space through consultation and visualization.
                </p>
            </div>
        </div>

        <!-- FAQ Item 13 -->
        <div style="margin-bottom: 20px; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 20px; background: #f8f9fa; cursor: pointer;" onclick="toggleFaq(this)">
                <h3 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin: 0; display: flex; justify-content: space-between; align-items: center;">
                    Why should I choose Velsuma modular kitchens?
                    <span style="font-size: 20px;">+</span>
                </h3>
            </div>
            <div style="display: none; padding: 20px; background: white; border-top: 1px solid #e0e0e0;">
                <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                    Velsuma focuses on premium material quality, intelligent space planning, elegant modern aesthetics, and professional execution to create modular kitchens that combine beauty, comfort, and long-lasting performance. Our end-to-end support ensures a seamless and satisfying experience.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="faq-cta-section" style="padding: 60px 20px; background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; text-align: center;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h2 class="faq-cta-title" style="font-size: 32px; font-weight: 700; margin-bottom: 20px;">Didn't Find Your Answer?</h2>
        <p style="font-size: 16px; margin-bottom: 30px; opacity: 0.9;">Contact our team for personalized guidance and expert consultation on your modular kitchen project.</p>
        <a href="/contact" class="btn" style="background: #e74c3c; color: white; padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Get in Touch</a>
    </div>
</section>

<script>
function toggleFaq(element) {
    const content = element.nextElementSibling;
    const span = element.querySelector('span');
    
    if (content.style.display === 'none' || content.style.display === '') {
        content.style.display = 'block';
        span.textContent = '−';
        element.style.background = '#e74c3c';
        element.style.color = 'white';
    } else {
        content.style.display = 'none';
        span.textContent = '+';
        element.style.background = '#f8f9fa';
        element.style.color = '#2c3e50';
    }
}
</script>
@endsection
