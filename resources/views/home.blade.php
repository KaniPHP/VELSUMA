@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); color: white; padding: 100px 20px; text-align: center;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">Luxury Modular Kitchens Designed for Modern Living</h1>
        <p style="font-size: 18px; margin-bottom: 40px; color: #ecf0f1; line-height: 1.6;">
            Transform your everyday living with premium modular kitchen solutions crafted for elegance, smart functionality, and long-lasting performance.
        </p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-bottom: 40px;">
            <a href="/contact" class="btn" style="background: #e74c3c; color: white; padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Get Free Design Consultation</a>
            <a href="/products" class="btn" style="background: transparent; color: white; padding: 12px 30px; border: 2px solid white; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Explore Kitchen Packages</a>
        </div>
        <img src="frontend/img/portfolio/1.jpg" alt="Luxury Kitchen" style="width: 100%; max-width: 1000px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
    </div>
</section>

<!-- About Section -->
<section style="padding: 80px 20px; background: #f8f9fa;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">Build a Kitchen That Reflects Your Lifestyle</h2>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <img src="frontend/img/portfolio/2.jpg" alt="Kitchen Design" style="width: 100%; border-radius: 8px;">
            </div>
            <div>
                <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    A kitchen is more than just a cooking space. It is where conversations begin, families connect, and everyday moments become memories.
                </p>
                <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    Velsuma modular kitchens are designed to bring together comfort, functionality, and elegant aesthetics with seamless layouts, premium finishes, and intelligent storage systems that simplify daily living.
                </p>
                <p style="font-size: 16px; line-height: 1.8; color: #555;">
                    Whether you prefer a luxury modern kitchen or a clean contemporary setup, we customise every detail to suit your space and lifestyle.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">Why Homeowners Choose Velsuma</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <img src="frontend/img/icon/design.png" alt="Customized" style="width: 80px; height: 80px; margin-bottom: 20px;">
                <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 15px; color: #2c3e50;">Customised for Every Home</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Every kitchen is designed based on your space, storage needs, cooking habits, and interior preferences.</p>
            </div>
            <!-- Feature 2 -->
            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <img src="frontend/img/icon/strategy.png" alt="Premium" style="width: 80px; height: 80px; margin-bottom: 20px;">
                <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 15px; color: #2c3e50;">Premium Material Standards</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">We use carefully selected boards, laminates, acrylic finishes, and profile systems to ensure long-lasting durability.</p>
            </div>
            <!-- Feature 3 -->
            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <img src="frontend/img/icon/cart.png" alt="Storage" style="width: 80px; height: 80px; margin-bottom: 20px;">
                <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 15px; color: #2c3e50;">Smart Storage Solutions</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Maximise every inch of space with intelligent cabinet layouts and organised storage systems.</p>
            </div>
            <!-- Feature 4 -->
            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <img src="frontend/img/icon/photo.png" alt="Finishes" style="width: 80px; height: 80px; margin-bottom: 20px;">
                <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 15px; color: #2c3e50;">Elegant Modern Finishes</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Minimal, contemporary, and luxury-inspired finishes designed for modern interiors.</p>
            </div>
            <!-- Feature 5 -->
            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <img src="frontend/img/icon/research.png" alt="Installation" style="width: 80px; height: 80px; margin-bottom: 20px;">
                <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 15px; color: #2c3e50;">Professional Installation Team</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">From measurement to final installation, our experienced team ensures smooth execution.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="padding: 60px 20px; background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); color: white; text-align: center;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 20px;">Ready to Transform Your Kitchen?</h2>
        <p style="font-size: 16px; margin-bottom: 30px; opacity: 0.9;">Get expert guidance on modular kitchens, premium finishes, and customised solutions for your home.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="/contact" class="btn" style="background: white; color: #e74c3c; padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Book Free Consultation</a>
            <a href="/products" class="btn" style="background: transparent; color: white; padding: 12px 30px; border: 2px solid white; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Explore Packages</a>
        </div>
    </div>
</section>

<!-- START HOME -->
<!-- START HOME removed per request -->



<!-- END TESTIMONIALS -->

<!-- BLOG -->

<!-- END BLOG -->

<!-- CONTACT -->

<!-- END CONTACT -->

<!-- START PARTNER LOGO -->

<!-- END PARTNER LOGO -->

@endsection
