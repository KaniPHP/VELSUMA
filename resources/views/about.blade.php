@extends('layouts.app')

@section('content')
<!-- Hero Section -->
    <section class="about-hero-section" style="background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; padding: 80px 20px; text-align: center;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 class="about-hero-title" style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">About Velsuma</h1>
        <p style="font-size: 18px; color: #1f3a5d; line-height: 1.6;">Premium interior design solutions for elegant living</p>
    </div>
</section>

<!-- About Content Section -->
<section class="about-story-section" style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <div class="about-story-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; margin-bottom: 60px;">
            <div>
                <img src="frontend/img/portfolio/3.jpg" alt="About Velsuma" style="width: 100%; border-radius: 8px;">
            </div>
            <div>
                <h2 class="about-story-title" style="font-size: 36px; font-weight: 700; margin-bottom: 20px; color: #2c3e50;">Our Story</h2>
                <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    At Velsuma, we do not simply create interiors. We design spaces that improve everyday living.
                </p>
                <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    Specialising in premium modular kitchens, soffit panels, and SPC flooring solutions, Velsuma focuses on combining modern aesthetics with practical functionality to create elegant residential and commercial interiors.
                </p>
                <p style="font-size: 16px; line-height: 1.8; color: #555;">
                    Our design approach is centred around comfort, smart space planning, premium craftsmanship, and long-term durability. Every project is carefully customised to reflect the lifestyle, taste, and functional requirements of each customer.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Design Philosophy Section -->
<section class="about-philosophy-section" style="padding: 80px 20px; background: #f8f9fa;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 class="about-philosophy-heading" style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">Our Design Philosophy</h2>
        <p style="text-align: center; font-size: 16px; color: #666; margin-bottom: 50px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.6;">
            We believe great interiors should feel elegant, functional, and effortless. That is why every Velsuma project is designed with:
        </p>
        
        <div class="about-philosophy-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="padding: 30px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <div style="font-size: 40px; margin-bottom: 15px; color: #e74c3c;">📐</div>
                <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 10px; color: #2c3e50;">Intelligent Space Planning</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Optimized layouts that maximize functionality and flow</p>
            </div>
            <div style="padding: 30px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <div style="font-size: 40px; margin-bottom: 15px; color: #3498db;">✨</div>
                <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 10px; color: #2c3e50;">Premium Material Selection</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Carefully chosen materials for durability and beauty</p>
            </div>
            <div style="padding: 30px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <div style="font-size: 40px; margin-bottom: 15px; color: #27ae60;">🎨</div>
                <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 10px; color: #2c3e50;">Minimal Modern Aesthetics</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Clean lines and contemporary design principles</p>
            </div>
            <div style="padding: 30px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <div style="font-size: 40px; margin-bottom: 15px; color: #f39c12;">🛋️</div>
                <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 10px; color: #2c3e50;">Functional Comfort</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">User-friendly spaces that feel great to live in</p>
            </div>
            <div style="padding: 30px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <div style="font-size: 40px; margin-bottom: 15px; color: #9b59b6;">⏰</div>
                <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 10px; color: #2c3e50;">Long-Lasting Performance</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Built to stand the test of time with proper maintenance</p>
            </div>
        </div>
    </div>
</section>

<!-- Why We Stand Different -->
<section class="about-difference-section" style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 class="about-difference-heading" style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">Why Velsuma Stands Different</h2>

        <div class="about-difference-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div>
                <div style="margin-bottom: 25px; padding: 20px; background: #f8f9fa; border-left: 4px solid #e74c3c; border-radius: 4px;">
                    <h4 style="font-size: 18px; font-weight: 600; color: #2c3e50; margin-bottom: 10px;">Customised Modern Designs</h4>
                    <p style="font-size: 14px; color: #666;">Every project is uniquely crafted to match your vision</p>
                </div>
                <div style="margin-bottom: 25px; padding: 20px; background: #f8f9fa; border-left: 4px solid #3498db; border-radius: 4px;">
                    <h4 style="font-size: 18px; font-weight: 600; color: #2c3e50; margin-bottom: 10px;">Premium Finish Quality</h4>
                    <p style="font-size: 14px; color: #666;">Superior materials and finishes that last</p>
                </div>
                <div style="margin-bottom: 25px; padding: 20px; background: #f8f9fa; border-left: 4px solid #27ae60; border-radius: 4px;">
                    <h4 style="font-size: 18px; font-weight: 600; color: #2c3e50; margin-bottom: 10px;">Expert Installation Team</h4>
                    <p style="font-size: 14px; color: #666;">Experienced professionals ensuring flawless execution</p>
                </div>
            </div>
            <div>
                <div style="margin-bottom: 25px; padding: 20px; background: #f8f9fa; border-left: 4px solid #f39c12; border-radius: 4px;">
                    <h4 style="font-size: 18px; font-weight: 600; color: #2c3e50; margin-bottom: 10px;">End-to-End Project Support</h4>
                    <p style="font-size: 14px; color: #666;">Complete assistance from concept to completion</p>
                </div>
                <div style="margin-bottom: 25px; padding: 20px; background: #f8f9fa; border-left: 4px solid #9b59b6; border-radius: 4px;">
                    <h4 style="font-size: 18px; font-weight: 600; color: #2c3e50; margin-bottom: 10px;">Contemporary Material Collections</h4>
                    <p style="font-size: 14px; color: #666;">Latest designs and finishes available</p>
                </div>
                <div style="margin-bottom: 25px; padding: 20px; background: #f8f9fa; border-left: 4px solid #e74c3c; border-radius: 4px;">
                    <h4 style="font-size: 18px; font-weight: 600; color: #2c3e50; margin-bottom: 10px;">Professional Execution Standards</h4>
                    <p style="font-size: 14px; color: #666;">Quality assurance at every stage</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="about-cta-section" style="padding: 60px 20px; background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; text-align: center;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h2 class="about-cta-title" style="font-size: 32px; font-weight: 700; margin-bottom: 20px;">Experience the Velsuma Difference</h2>
        <p class="about-cta-desc" style="font-size: 16px; margin-bottom: 30px; opacity: 0.9;">Let us design your perfect space with elegance, functionality, and premium craftsmanship.</p>
        <a href="/contact" class="btn" style="background: #e74c3c; color: white; padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Get Free Consultation</a>
    </div>
</section>
@endsection
