@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); color: white; padding: 80px 20px; text-align: center;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">Our Services</h1>
        <p style="font-size: 18px; color: #ecf0f1; line-height: 1.6;">End-to-End Interior Solutions from Concept to Completion</p>
    </div>
</section>

<!-- Services Section -->
<section style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <p style="text-align: center; font-size: 16px; color: #666; margin-bottom: 50px; max-width: 700px; margin-left: auto; margin-right: auto;">
            At Velsuma, we provide complete project support from design consultation to final installation with professional execution standards.
        </p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Service 1 -->
            <div style="padding: 40px; background: #f8f9fa; border-radius: 8px; border-top: 4px solid #e74c3c; text-align: center;">
                <img src="frontend/img/icon/design.png" alt="Kitchen Design" style="width: 60px; height: 60px; margin-bottom: 20px;">
                <h3 style="font-size: 22px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Modular Kitchen Design & Installation</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.8;">
                    Customized kitchen planning with intelligent layouts, premium materials, and seamless installation support. We handle everything from initial consultation to final execution.
                </p>
            </div>

            <!-- Service 2 -->
            <div style="padding: 40px; background: #f8f9fa; border-radius: 8px; border-top: 4px solid #3498db; text-align: center;">
                <img src="frontend/img/icon/photo.png" alt="Consultation" style="width: 60px; height: 60px; margin-bottom: 20px;">
                <h3 style="font-size: 22px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Interior Consultation</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.8;">
                    Expert guidance for selecting materials, finishes, colors, and modern interior concepts that align with your vision and lifestyle.
                </p>
            </div>

            <!-- Service 3 -->
            <div style="padding: 40px; background: #f8f9fa; border-radius: 8px; border-top: 4px solid #27ae60; text-align: center;">
                <img src="frontend/img/icon/strategy.png" alt="Soffit" style="width: 60px; height: 60px; margin-bottom: 20px;">
                <h3 style="font-size: 22px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Soffit Panel Installation</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.8;">
                    Professional installation support for interior soffit ceilings, exterior soffit systems, and wall-cladding applications with precision finishing.
                </p>
            </div>

            <!-- Service 4 -->
            <div style="padding: 40px; background: #f8f9fa; border-radius: 8px; border-top: 4px solid #f39c12; text-align: center;">
                <img src="frontend/img/icon/research.png" alt="Flooring" style="width: 60px; height: 60px; margin-bottom: 20px;">
                <h3 style="font-size: 22px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">SPC Flooring Installation</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.8;">
                    Precision flooring installation with clean finishing and long-lasting performance. Our team ensures perfect alignment and durability.
                </p>
            </div>

            <!-- Service 5 -->
            <div style="padding: 40px; background: #f8f9fa; border-radius: 8px; border-top: 4px solid #9b59b6; text-align: center;">
                <img src="frontend/img/icon/cart.png" alt="Measurement" style="width: 60px; height: 60px; margin-bottom: 20px;">
                <h3 style="font-size: 22px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Site Measurement & Planning</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.8;">
                    Accurate space planning and execution support to ensure perfect project delivery. We take detailed measurements and create custom layouts.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Our Services -->
<section style="padding: 80px 20px; background: #f8f9fa;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">Why Choose Our Services?</h2>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
            <!-- Left Column -->
            <div>
                <div style="margin-bottom: 35px;">
                    <h4 style="font-size: 18px; font-weight: 700; color: #e74c3c; margin-bottom: 10px;">✓ End-to-End Support</h4>
                    <p style="font-size: 14px; color: #666; line-height: 1.8;">From initial consultation to final handover, we manage every aspect of your project with care and expertise.</p>
                </div>
                <div style="margin-bottom: 35px;">
                    <h4 style="font-size: 18px; font-weight: 700; color: #3498db; margin-bottom: 10px;">✓ Premium Quality Materials</h4>
                    <p style="font-size: 14px; color: #666; line-height: 1.8;">We source and use only the finest materials that meet our high standards for durability and aesthetics.</p>
                </div>
                <div style="margin-bottom: 35px;">
                    <h4 style="font-size: 18px; font-weight: 700; color: #27ae60; margin-bottom: 10px;">✓ Expert Team</h4>
                    <p style="font-size: 14px; color: #666; line-height: 1.8;">Our experienced designers and installers bring years of expertise and commitment to excellence.</p>
                </div>
            </div>

            <!-- Right Column -->
            <div>
                <div style="margin-bottom: 35px;">
                    <h4 style="font-size: 18px; font-weight: 700; color: #f39c12; margin-bottom: 10px;">✓ Customised Solutions</h4>
                    <p style="font-size: 14px; color: #666; line-height: 1.8;">Every project is tailored to your unique space, preferences, and budget requirements.</p>
                </div>
                <div style="margin-bottom: 35px;">
                    <h4 style="font-size: 18px; font-weight: 700; color: #9b59b6; margin-bottom: 10px;">✓ Timely Execution</h4>
                    <p style="font-size: 14px; color: #666; line-height: 1.8;">We respect your time and deliver projects on schedule with minimal disruption to your life.</p>
                </div>
                <div style="margin-bottom: 35px;">
                    <h4 style="font-size: 18px; font-weight: 700; color: #e74c3c; margin-bottom: 10px;">✓ Quality Assurance</h4>
                    <p style="font-size: 14px; color: #666; line-height: 1.8;">Every detail is inspected to ensure premium finishing and your complete satisfaction.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Process -->
<section style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">How We Work</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #e74c3c; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin: 0 auto 20px; font-weight: 700;">1</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Consultation</h3>
                <p style="font-size: 13px; color: #666;">Understanding your requirements, space, and design preferences in detail.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #3498db; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin: 0 auto 20px; font-weight: 700;">2</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Design Planning</h3>
                <p style="font-size: 13px; color: #666;">Creating customised layouts and modern design concepts tailored for you.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #27ae60; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin: 0 auto 20px; font-weight: 700;">3</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Material Selection</h3>
                <p style="font-size: 13px; color: #666;">Selecting premium finishes, textures, and accessories that match your vision.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #f39c12; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin: 0 auto 20px; font-weight: 700;">4</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Production</h3>
                <p style="font-size: 13px; color: #666;">Precision manufacturing using quality materials and modern systems.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #9b59b6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin: 0 auto 20px; font-weight: 700;">5</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Installation</h3>
                <p style="font-size: 13px; color: #666;">Professional installation with attention to detail and finishing quality.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #e74c3c; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin: 0 auto 20px; font-weight: 700;">6</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Handover</h3>
                <p style="font-size: 13px; color: #666;">Complete project delivery with quality assurance and your satisfaction.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="padding: 60px 20px; background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); color: white; text-align: center;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 20px;">Ready to Start Your Project?</h2>
        <p style="font-size: 16px; margin-bottom: 30px; opacity: 0.9;">Let our expert team help you create the perfect space for your home or business.</p>
        <a href="/contact" class="btn" style="background: white; color: #e74c3c; padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Schedule Consultation</a>
    </div>
</section>
@endsection
