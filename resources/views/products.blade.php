@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section style="background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; padding: 80px 20px; text-align: center;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">Our Products</h1>
        <p style="font-size: 18px; color: #1f3a5d; line-height: 1.6;">Premium modular kitchens, soffit systems, and SPC flooring solutions</p>
    </div>
</section>

<!-- Modular Kitchens Section -->
<section style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; margin-bottom: 60px;">
            <div>
                <img src="frontend/img/portfolio/4.jpg" alt="Modular Kitchens" style="width: 100%; border-radius: 8px;">
            </div>
            <div>
                <h2 style="font-size: 36px; font-weight: 700; margin-bottom: 20px; color: #2c3e50;">Premium Modular Kitchens</h2>
                <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    Modern kitchens should be beautiful, organized, and effortless to use. Velsuma modular kitchens are designed to maximize functionality while creating a clean and luxurious visual experience.
                </p>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px;">Every kitchen is planned with smart storage systems, ergonomic layouts, premium finishes, and modern accessories that simplify daily routines.</p>
                
                <h4 style="font-size: 18px; font-weight: 600; color: #2c3e50; margin-bottom: 15px;">Features:</h4>
                <ul style="font-size: 14px; color: #666; line-height: 2;">
                    <li>✓ Smart Space Utilization</li>
                    <li>✓ Elegant Modern Finishes</li>
                    <li>✓ Premium Storage Solutions</li>
                    <li>✓ Soft-Close Accessories</li>
                    <li>✓ Customized Layout Planning</li>
                    <li>✓ Easy Maintenance Surfaces</li>
                    <li>✓ Durable Board Materials</li>
                    <li>✓ Functional Workflow Design</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Kitchen Packages Section -->
<section style="padding:80px 20px;background:#f8f9fa;">

<div class="container" style="max-width:1200px;margin:0 auto;">

<h2 style="
font-size:36px;
font-weight:700;
text-align:center;
margin-bottom:20px;
color:#2c3e50;">
Kitchen Packages
</h2>

<p style="
text-align:center;
font-size:16px;
color:#666;
margin-bottom:50px;">
Choose the Perfect Kitchen Package for Your Lifestyle
</p>

<div style="
display:flex;
gap:30px;
overflow-x:auto;
scroll-behavior:smooth;
padding-bottom:20px;">

<!-- Platinum -->
<div style="
min-width:330px;
flex-shrink:0;
padding:30px;
background:white;
border-radius:12px;
box-shadow:0 5px 20px rgba(0,0,0,.08);
border-top:5px solid #f39c12;">

<h3 style="font-size:22px;color:#f39c12;margin-bottom:10px;">
Platinum Package
</h3>

<p style="color:#666;margin-bottom:20px;font-style:italic;">
Luxury Premium Experience
</p>

<ul style="color:#666;line-height:1.9;padding-left:18px;">
<li>BWP Premium Carcass Boards</li>
<li>Green Optima / Sharon Prima 710</li>
<li>MR+ Premium Laminates</li>
<li>Frosty White + 3 Color Variants</li>
<li>Birch Ply Acrylic Shutters</li>
<li>Acrymica Acrylic Glass Finish</li>
<li>Premium Slim Profiles – 25mm</li>
<li>4 Premium Finish Choices</li>
</ul>

<p style="
margin-top:20px;
padding-top:20px;
border-top:1px solid #eee;
font-weight:600;
color:#e74c3c;">
Best For: Luxury villas and high-end modern interiors
</p>

</div>

<!-- Gold -->
<div style="
min-width:330px;
flex-shrink:0;
padding:30px;
background:white;
border-radius:12px;
box-shadow:0 5px 20px rgba(0,0,0,.08);
border-top:5px solid #f1c40f;">

<h3 style="font-size:22px;color:#f1c40f;margin-bottom:10px;">
Gold Package
</h3>

<p style="color:#666;margin-bottom:20px;font-style:italic;">
Premium Modern Living
</p>

<ul style="color:#666;line-height:1.9;padding-left:18px;">
<li>BWP Carcass Boards</li>
<li>Karnigold BWP</li>
<li>HGL Laminate Range</li>
<li>Frosty White + 1 Color Variant</li>
<li>Green Absol BWP Shutters</li>
<li>Premium Acrylic Finish</li>
<li>Slim Profiles – 20mm</li>
<li>3 Modern Finish Choices</li>
</ul>

<p style="
margin-top:20px;
padding-top:20px;
border-top:1px solid #eee;
font-weight:600;
color:#e74c3c;">
Best For: Premium modern homes with elegant expectations
</p>

</div>

<!-- Silver -->
<div style="
min-width:330px;
flex-shrink:0;
padding:30px;
background:white;
border-radius:12px;
box-shadow:0 5px 20px rgba(0,0,0,.08);
border-top:5px solid #95a5a6;">

<h3 style="font-size:22px;color:#95a5a6;margin-bottom:10px;">
Silver Package
</h3>

<p style="color:#666;margin-bottom:20px;font-style:italic;">
Smart Contemporary Solution
</p>

<ul style="color:#666;line-height:1.9;padding-left:18px;">
<li>MR / PLBWR Boards</li>
<li>Green Ecotec BWP</li>
<li>SF Laminate Range</li>
<li>Frosty White Finish</li>
<li>BWP Eco / HDHMR Shutters</li>
<li>Praveedh Acrylic Finish</li>
<li>Slim / Regular Profiles</li>
<li>1 Standard Finish Choice</li>
</ul>

<p style="
margin-top:20px;
padding-top:20px;
border-top:1px solid #eee;
font-weight:600;
color:#e74c3c;">
Best For: Stylish family kitchens with balanced affordability
</p>

</div>

<!-- Bronze -->
<div style="
min-width:330px;
flex-shrink:0;
padding:30px;
background:white;
border-radius:12px;
box-shadow:0 5px 20px rgba(0,0,0,.08);
border-top:5px solid #cd7f32;">

<h3 style="font-size:22px;color:#cd7f32;margin-bottom:10px;">
Bronze Package
</h3>

<p style="color:#666;margin-bottom:20px;font-style:italic;">
Functional Modern Kitchen
</p>

<ul style="color:#666;line-height:1.9;padding-left:18px;">
<li>HDMR Boards</li>
<li>Century / Karni PLBWR</li>
<li>CAL+ (0.8) Laminate Range</li>
<li>Frosty White Finish</li>
<li>HDMR Shutters</li>
<li>Elizure Finish</li>
<li>Slim / Regular Profiles</li>
<li>Frost & Plain Finish Options</li>
</ul>

<p style="
margin-top:20px;
padding-top:20px;
border-top:1px solid #eee;
font-weight:600;
color:#e74c3c;">
Best For: Budget-friendly modern kitchen spaces
</p>

</div>

</div>

</div>

</section>

<!-- Soffit Panels Section -->
<section style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">Soffit Panels</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 60px;">
            <!-- Soffit Interior -->
            <div style="padding: 40px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <img src="frontend/img/blog/1.jpg" alt="Interior Soffit" style="width: 100%; border-radius: 8px; margin-bottom: 20px;">
                <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Soffit Interior</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px;">Create elegant interior ceilings with premium soffit systems designed for modern homes and offices.</p>
                <h5 style="font-size: 12px; font-weight: 600; color: #2c3e50; text-transform: uppercase; margin-bottom: 10px;">Benefits:</h5>
                <ul style="font-size: 13px; color: #666; line-height: 1.8;">
                    <li>✓ Premium Wood Finish Appearance</li>
                    <li>✓ Modern Ceiling Design</li>
                    <li>✓ Smooth Clean Finishing</li>
                    <li>✓ Low Maintenance Surface</li>
                </ul>
            </div>

            <!-- Exterior Soffit -->
            <div style="padding: 40px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <img src="frontend/img/blog/2.jpg" alt="Exterior Soffit" style="width: 100%; border-radius: 8px; margin-bottom: 20px;">
                <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Exterior Soffit</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px;">Weather-resistant soffit systems engineered for outdoor ceilings and architectural applications.</p>
                <h5 style="font-size: 12px; font-weight: 600; color: #2c3e50; text-transform: uppercase; margin-bottom: 10px;">Benefits:</h5>
                <ul style="font-size: 13px; color: #666; line-height: 1.8;">
                    <li>✓ UV Resistant</li>
                    <li>✓ Water Resistant</li>
                    <li>✓ Heat Resistant</li>
                    <li>✓ Fade-Resistant Finish</li>
                </ul>
            </div>

            <!-- Wall Cladding -->
            <div style="padding: 40px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <img src="frontend/img/blog/3.jpg" alt="Wall Cladding" style="width: 100%; border-radius: 8px; margin-bottom: 20px;">
                <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Wall Cladding</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px;">Modern wall-cladding solutions designed to improve exterior aesthetics with durable finishes.</p>
                <h5 style="font-size: 12px; font-weight: 600; color: #2c3e50; text-transform: uppercase; margin-bottom: 10px;">Benefits:</h5>
                <ul style="font-size: 13px; color: #666; line-height: 1.8;">
                    <li>✓ Elegant Architectural Appearance</li>
                    <li>✓ Modern Texture Finishes</li>
                    <li>✓ Strong Durable Material</li>
                    <li>✓ Residential & Commercial Use</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Bamboo Charcoal Wall Panels -->
<section style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 20px; color: #2c3e50; text-align: center;">Bamboo Charcoal Wall Panels</h2>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: start;">
            <div style="padding: 30px; background: #f5f9ff; border-radius: 16px; border: 1px solid rgba(46, 125, 228, 0.12); box-shadow: 0 18px 50px rgba(46, 125, 228, 0.05);">
                <p style="font-size: 15px; color: #3a4660; margin-bottom: 24px; line-height: 1.8;">Transform your interiors with Bamboo Charcoal Wall Panels – the most demanding wall panel option in modern homes and offices. These premium sheets combine stunning finishes with unbeatable durability, making them the top choice for wardrobes, TV units, and every space in between.</p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 24px;">
                  <div style="padding: 18px; background: white; border-radius: 12px; border: 1px solid #e9eef7;">
                    <div style="font-size: 13px; font-weight: 700; color: #1f3a5d; margin-bottom: 6px;">Thickness</div>
                    <div style="font-size: 14px; color: #4f5b72;">8 mm</div>
                  </div>
                  <div style="padding: 18px; background: white; border-radius: 12px; border: 1px solid #e9eef7;">
                    <div style="font-size: 13px; font-weight: 700; color: #1f3a5d; margin-bottom: 6px;">Sizes Available</div>
                    <div style="font-size: 14px; color: #4f5b72;">8 × 4 ft and 10 × 4 ft</div>
                  </div>
                  <div style="padding: 18px; background: white; border-radius: 12px; border: 1px solid #e9eef7;">
                    <div style="font-size: 13px; font-weight: 700; color: #1f3a5d; margin-bottom: 6px;">Shades</div>
                    <div style="font-size: 14px; color: #4f5b72;">12 finishes: wood grain, marble, glossy, matte, metallic</div>
                  </div>
                  <div style="padding: 18px; background: white; border-radius: 12px; border: 1px solid #e9eef7;">
                    <div style="font-size: 13px; font-weight: 700; color: #1f3a5d; margin-bottom: 6px;">Waterproof</div>
                    <div style="font-size: 14px; color: #4f5b72;">100% waterproof—ideal for kitchens, bathrooms, humid areas</div>
                  </div>
                  <div style="padding: 18px; background: white; border-radius: 12px; border: 1px solid #e9eef7;">
                    <div style="font-size: 13px; font-weight: 700; color: #1f3a5d; margin-bottom: 6px;">Bendability</div>
                    <div style="font-size: 14px; color: #4f5b72;">90-degree bendable for curved walls and custom designs</div>
                  </div>
                  <div style="padding: 18px; background: white; border-radius: 12px; border: 1px solid #e9eef7;">
                    <div style="font-size: 13px; font-weight: 700; color: #1f3a5d; margin-bottom: 6px;">Durability</div>
                    <div style="font-size: 14px; color: #4f5b72;">Termite-proof, scratch-resistant, and fade-resistant</div>
                  </div>
                  <div style="padding: 18px; background: white; border-radius: 12px; border: 1px solid #e9eef7; grid-column: span 2;">
                    <div style="font-size: 13px; font-weight: 700; color: #1f3a5d; margin-bottom: 6px;">Installation</div>
                    <div style="font-size: 14px; color: #4f5b72;">Easy adhesive or gum application—no heavy carpentry needed</div>
                  </div>
                </div>
            </div>
            <div style="overflow-x: auto; display: flex; gap: 18px; padding-bottom: 10px; scroll-snap-type: x mandatory; scroll-padding: 18px; scroll-behavior: smooth;">
                <img src="frontend/img/portfolio/6.svg" alt="Bamboo Charcoal Panel 1" style="flex: 0 0 100%; max-width: 100%; min-width: 100%; height: 280px; object-fit: cover; border-radius: 8px; scroll-snap-align: start;">
                <img src="frontend/img/portfolio/5.jpg" alt="Bamboo Charcoal Panel 2" style="flex: 0 0 100%; max-width: 100%; min-width: 100%; height: 280px; object-fit: cover; border-radius: 8px; scroll-snap-align: start;">
                <img src="frontend/img/blog/1.jpg" alt="Bamboo Charcoal Panel 3" style="flex: 0 0 100%; max-width: 100%; min-width: 100%; height: 280px; object-fit: cover; border-radius: 8px; scroll-snap-align: start;">
                <img src="frontend/img/blog/3.jpg" alt="Bamboo Charcoal Panel 4" style="flex: 0 0 100%; max-width: 100%; min-width: 100%; height: 280px; object-fit: cover; border-radius: 8px; scroll-snap-align: start;">
            </div>
        </div>
    </div>
    <div class="container" style="max-width:1200px; margin:0 auto; padding:80px 20px;">

      <div style="padding:80px 20px; background:#f8f9fa;">

    <div style="text-align:center; margin-bottom:40px;">
        <h2 style="
            font-size:36px;
            font-weight:700;
            color:#2c3e50;">
            Why Choose Bamboo Charcoal?
        </h2>
    </div>

    <div style="
        display:flex;
        gap:20px;
        overflow-x:auto;
        scroll-behavior:smooth;
        padding-bottom:10px;">

        <!-- Card -->
        <div style="
            min-width:300px;
            background:#fff;
            padding:30px;
            border-radius:16px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
            flex-shrink:0;">

            <div style="font-size:36px;">💧</div>

            <h4 style="margin:20px 0;">
                100% Waterproof Protection
            </h4>

            <p style="color:#666; line-height:1.8;">
                Monsoon-ready and humidity-resistant. Won’t swell, peel, or mold.
            </p>

        </div>

        <div style="
            min-width:300px;
            background:#fff;
            padding:30px;
            border-radius:16px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
            flex-shrink:0;">

            <div style="font-size:36px;">↩️</div>

            <h4 style="margin:20px 0;">
                Flexible & Shapeable
            </h4>

            <p style="color:#666; line-height:1.8;">
                Bend up to 90° for curved walls and custom interiors.
            </p>

        </div>

        <div style="
            min-width:300px;
            background:#fff;
            padding:30px;
            border-radius:16px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
            flex-shrink:0;">

            <div style="font-size:36px;">🛡️</div>

            <h4 style="margin:20px 0;">
                Termite & Scratch-Proof
            </h4>

            <p style="color:#666; line-height:1.8;">
                Long-lasting finish ideal for high-traffic spaces.
            </p>

        </div>

        <div style="
            min-width:300px;
            background:#fff;
            padding:30px;
            border-radius:16px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
            flex-shrink:0;">

            <div style="font-size:36px;">🌱</div>

            <h4 style="margin:20px 0;">
                Eco-Friendly
            </h4>

            <p style="color:#666; line-height:1.8;">
                Sustainable bamboo fibers with odor absorption.
            </p>

        </div>

        <div style="
            min-width:300px;
            background:#fff;
            padding:30px;
            border-radius:16px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
            flex-shrink:0;">

            <div style="font-size:36px;">🔇</div>

            <h4 style="margin:20px 0;">
                Sound & Heat Insulation
            </h4>

            <p style="color:#666; line-height:1.8;">
                Reduces noise and keeps interiors cooler.
            </p>

        </div>

    </div>

</div>
        </div>

    </div>
</section>

<!-- SPC Flooring Section -->

<section style="padding:100px 20px;background:#f8f9fa;">

<div class="container" style="max-width:1200px;margin:0 auto;">

<div style="
display:grid;
grid-template-columns:1fr 1fr;
gap:60px;
align-items:center;">

<!-- Content -->

<div>


<h2 style="
font-size:42px;
font-weight:700;
color:#2c3e50;
margin-bottom:20px;">

Premium SPC Flooring

</h2>

<p style="
font-size:16px;
line-height:1.9;
color:#555;
margin-bottom:18px;">

Upgrade your interiors with stylish SPC flooring solutions designed for durability, comfort, and modern aesthetics.

</p>

<p style="
font-size:15px;
line-height:1.9;
color:#666;
margin-bottom:35px;">

Velsuma SPC flooring combines waterproof performance, scratch resistance, and elegant wooden finishes to create sophisticated spaces.

</p>


<div style="
display:grid;
grid-template-columns:repeat(2,1fr);
gap:16px;">

<div style="
background:white;
padding:16px 18px;
border-radius:14px;
box-shadow:0 5px 18px rgba(0,0,0,.08);">
✓ 100% Waterproof Flooring
</div>

<div style="
background:white;
padding:16px 18px;
border-radius:14px;
box-shadow:0 5px 18px rgba(0,0,0,.08);">
✓ Scratch & Wear Resistant
</div>

<div style="
background:white;
padding:16px 18px;
border-radius:14px;
box-shadow:0 5px 18px rgba(0,0,0,.08);">
✓ Elegant Wooden Textures
</div>

<div style="
background:white;
padding:16px 18px;
border-radius:14px;
box-shadow:0 5px 18px rgba(0,0,0,.08);">
✓ Easy Click-Lock Installation
</div>

<div style="
background:white;
padding:16px 18px;
border-radius:14px;
box-shadow:0 5px 18px rgba(0,0,0,.08);">
✓ Comfortable Underfoot
</div>

<div style="
background:white;
padding:16px 18px;
border-radius:14px;
box-shadow:0 5px 18px rgba(0,0,0,.08);">
✓ Low Maintenance
</div>

<div style="
background:white;
padding:16px 18px;
border-radius:14px;
box-shadow:0 5px 18px rgba(0,0,0,.08);
grid-column:span 2;">
✓ Long Product Life
</div>

</div>

</div>


<!-- Image -->

<div style="position:relative;">

<div style="
position:absolute;
top:18px;
left:18px;
width:100%;
height:100%;
background:#dff1ff;
border-radius:24px;">
</div>

<img
src="frontend/img/portfolio/5.jpg"
alt="Premium SPC Flooring"

style="
position:relative;
width:100%;
border-radius:24px;
box-shadow:0 20px 45px rgba(0,0,0,.12);">

</div>

</div>

</div>

</section>

<!-- CTA Section -->
<section style="padding: 60px 20px; background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; text-align: center;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 20px;">Ready to Explore Our Products?</h2>
        <p style="font-size: 16px; margin-bottom: 30px; opacity: 0.9;">Get personalized recommendations and expert consultation for your space.</p>
        <a href="/contact" class="btn" style="background: #e74c3c; color: white; padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Book Consultation</a>
    </div>
</section>
@endsection
