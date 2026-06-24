@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section style="background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; padding: 80px 20px; text-align: center;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">Get in Touch</h1>
        <p style="font-size: 18px; color: #1f3a5d; line-height: 1.6;">Let's Design Your Dream Space Together</p>
    </div>
</section>

<!-- Contact Section -->
<section style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            <!-- Contact Form -->
            <div>
                <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 30px; color: #2c3e50;">Book Your Free Consultation</h2>
                <iframe src="https://docs.google.com/forms/d/1N0T8o1QxS0mgMzrxcRRR2u6Eai1GDB2fhCyxRbiKhIw/viewform?embedded=true" width="100%" height="800" frameborder="0" marginheight="0" marginwidth="0" style="border-radius: 8px;">Loading…</iframe>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 30px; color: #2c3e50;">Let's Connect</h2>
                
                <div style="background: #f8f9fa; padding: 30px; border-radius: 8px; margin-bottom: 30px;">
                    <img src="frontend/img/portfolio/5.jpg" alt="Contact Velsuma" style="width: 100%; border-radius: 8px; margin-bottom: 30px;">
                </div>

                <div style="background: #f8f9fa; padding: 30px; border-radius: 8px; margin-bottom: 25px;">
                    <h4 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">📍 Location</h4>
                    <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                        No.30/4A1A1B, Sri Sai Nagar Main Road<br>
                        200 Feet Radial Rd, Thoraipakkam<br>
                        Chennai, Tamil Nadu 600096
                    </p>
                </div>

                <div style="background: #f8f9fa; padding: 30px; border-radius: 8px; margin-bottom: 25px;">
                    <h4 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">📞 Phone</h4>
                    <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                        <a href="tel:+919566607770" style="color: inherit; text-decoration: none;">+91 95666 07770</a><br>
                        <a href="tel:+919566444535" style="color: inherit; text-decoration: none;">+91 95664 44535</a>
                    </p>
                    <p style="font-size: 13px; color: #999; margin-top: 12px;">Working Hours: Mon – Sat | 9:00 AM – 6:00 PM</p>
                </div>

                <div style="background: #f8f9fa; padding: 30px; border-radius: 8px;">
                    <h4 style="font-size: 16px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">📧 Email</h4>
                    <p style="font-size: 14px; color: #666; line-height: 1.8; margin: 0;">
                        <a href="mailto:info@velsuma.com" style="color: inherit; text-decoration: none;">info@velsuma.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Contact Us Section -->
<section style="padding: 80px 20px; background: #f8f9fa;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">What Happens Next?</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="padding: 30px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <div style="width: 60px; height: 60px; background: #e74c3c; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 28px; margin: 0 auto 20px;">1</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Initial Response</h3>
                <p style="font-size: 13px; color: #666; line-height: 1.6;">Our team will respond to your inquiry within 24 hours with project details and scheduling options.</p>
            </div>
            
            <div style="padding: 30px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <div style="width: 60px; height: 60px; background: #3498db; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 28px; margin: 0 auto 20px;">2</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Site Visit</h3>
                <p style="font-size: 13px; color: #666; line-height: 1.6;">We'll schedule a convenient time to visit your space and take accurate measurements and requirements.</p>
            </div>
            
            <div style="padding: 30px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <div style="width: 60px; height: 60px; background: #27ae60; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 28px; margin: 0 auto 20px;">3</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Design Proposal</h3>
                <p style="font-size: 13px; color: #666; line-height: 1.6;">Receive detailed 2D/3D designs with materials, finishes, and pricing for your review.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">We Serve</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center; border-left: 4px solid #e74c3c;">
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Residential Projects</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Apartments, villas, and individual homes with customized interior solutions.</p>
            </div>
            
            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center; border-left: 4px solid #3498db;">
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Commercial Projects</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Offices, restaurants, and commercial spaces with professional design.</p>
            </div>
            
            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center; border-left: 4px solid #27ae60;">
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Hospitality Projects</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Hotels, resorts, and hospitality businesses with elegant interiors.</p>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section style="padding: 60px 20px; background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; text-align: center;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 20px;">Let's Create Something Beautiful</h2>
        <p style="font-size: 16px; margin-bottom: 30px; opacity: 0.9;">Contact Velsuma today to start your interior transformation journey. Your dream space is just a consultation away.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="#" class="btn" style="background: #e74c3c; color: white; padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Call Us Now</a>
            <a href="#" class="btn" style="background: transparent; color: #1f3a5d; padding: 12px 30px; border: 2px solid #1f3a5d; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Email Us</a>
        </div>
    </div>
</section>
@endsection
