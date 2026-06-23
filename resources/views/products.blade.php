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
<section style="padding: 80px 20px; background: #f8f9fa;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 20px; color: #2c3e50;">Kitchen Packages</h2>
        <p style="text-align: center; font-size: 16px; color: #666; margin-bottom: 50px;">Choose the Perfect Kitchen Package for Your Lifestyle</p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Platinum Package -->
            <div style="padding: 30px; background: white; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-top: 4px solid #f39c12;">
                <h3 style="font-size: 22px; font-weight: 700; color: #f39c12; margin-bottom: 10px;">Platinum Package</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px; font-style: italic;">Luxury Premium Experience</p>
                <div style="margin-bottom: 20px;">
                    <h5 style="font-size: 12px; font-weight: 600; color: #2c3e50; text-transform: uppercase; margin-bottom: 10px;">Specifications:</h5>
                    <ul style="font-size: 13px; color: #666; line-height: 1.8;">
                        <li>• BWP Premium Carcass Boards</li>
                        <li>• Green Optima / Sharon Prima 710</li>
                        <li>• MR+ Premium Laminates</li>
                        <li>• Frosty White + 3 Color Variants</li>
                        <li>• Birch Ply Acrylic Shutters</li>
                        <li>• Acrymica Acrylic Glass Finish</li>
                        <li>• Premium Slim Profiles – 25mm</li>
                        <li>• 4 Premium Finish Choices</li>
                    </ul>
                </div>
                <p style="font-size: 13px; color: #e74c3c; font-weight: 600; margin-top: 15px; padding-top: 15px; border-top: 1px solid #eee;">Best For: Luxury villas and high-end modern interiors</p>
            </div>

            <!-- Gold Package -->
            <div style="padding: 30px; background: white; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-top: 4px solid #f1c40f;">
                <h3 style="font-size: 22px; font-weight: 700; color: #f1c40f; margin-bottom: 10px;">Gold Package</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px; font-style: italic;">Premium Modern Living</p>
                <div style="margin-bottom: 20px;">
                    <h5 style="font-size: 12px; font-weight: 600; color: #2c3e50; text-transform: uppercase; margin-bottom: 10px;">Specifications:</h5>
                    <ul style="font-size: 13px; color: #666; line-height: 1.8;">
                        <li>• BWP Carcass Boards</li>
                        <li>• Karnigold BWP</li>
                        <li>• HGL Laminate Range</li>
                        <li>• Frosty White + 1 Color Variant</li>
                        <li>• Green Absol BWP Shutters</li>
                        <li>• Premium Acrylic Finish</li>
                        <li>• Slim Profiles – 20mm</li>
                        <li>• 3 Modern Finish Choices</li>
                    </ul>
                </div>
                <p style="font-size: 13px; color: #e74c3c; font-weight: 600; margin-top: 15px; padding-top: 15px; border-top: 1px solid #eee;">Best For: Premium modern homes with elegant expectations</p>
            </div>

            <!-- Silver Package -->
            <div style="padding: 30px; background: white; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-top: 4px solid #95a5a6;">
                <h3 style="font-size: 22px; font-weight: 700; color: #95a5a6; margin-bottom: 10px;">Silver Package</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px; font-style: italic;">Smart Contemporary Solution</p>
                <div style="margin-bottom: 20px;">
                    <h5 style="font-size: 12px; font-weight: 600; color: #2c3e50; text-transform: uppercase; margin-bottom: 10px;">Specifications:</h5>
                    <ul style="font-size: 13px; color: #666; line-height: 1.8;">
                        <li>• MR / PLBWR Boards</li>
                        <li>• Green Ecotec BWP</li>
                        <li>• SF Laminate Range</li>
                        <li>• Frosty White Finish</li>
                        <li>• BWP Eco / HDHMR Shutters</li>
                        <li>• Praveedh Acrylic Finish</li>
                        <li>• Slim / Regular Profiles</li>
                        <li>• 1 Standard Finish Choice</li>
                    </ul>
                </div>
                <p style="font-size: 13px; color: #e74c3c; font-weight: 600; margin-top: 15px; padding-top: 15px; border-top: 1px solid #eee;">Best For: Stylish family kitchens with balanced affordability</p>
            </div>

            <!-- Bronze Package -->
            <div style="padding: 30px; background: white; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-top: 4px solid #cd7f32;">
                <h3 style="font-size: 22px; font-weight: 700; color: #cd7f32; margin-bottom: 10px;">Bronze Package</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px; font-style: italic;">Functional Modern Kitchen</p>
                <div style="margin-bottom: 20px;">
                    <h5 style="font-size: 12px; font-weight: 600; color: #2c3e50; text-transform: uppercase; margin-bottom: 10px;">Specifications:</h5>
                    <ul style="font-size: 13px; color: #666; line-height: 1.8;">
                        <li>• HDMR Boards</li>
                        <li>• Century / Karni PLBWR</li>
                        <li>• CAL+ (0.8) Laminate Range</li>
                        <li>• Frosty White Finish</li>
                        <li>• HDMR Shutters</li>
                        <li>• Elizure Finish</li>
                        <li>• Slim / Regular Profiles</li>
                        <li>• Frost & Plain Finish Options</li>
                    </ul>
                </div>
                <p style="font-size: 13px; color: #e74c3c; font-weight: 600; margin-top: 15px; padding-top: 15px; border-top: 1px solid #eee;">Best For: Budget-friendly modern kitchen spaces</p>
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
            <div>
                <p style="font-size: 14px; color: #666; margin-bottom: 15px;">Transform your interiors with Bamboo Charcoal Wall Panels – the most demanding wall panel option in modern homes and offices. These premium sheets combine stunning finishes with unbeatable durability, making them the top choice for wardrobes, TV units, and every space in between.</p>
                <table style="width:100%; border-collapse: collapse; margin-bottom:16px;">
                  <tr><td style="padding:8px; border:1px solid #e9ecef; width:35%; font-weight:600;">Thickness</td><td style="padding:8px; border:1px solid #e9ecef;">8 mm</td></tr>
                  <tr><td style="padding:8px; border:1px solid #e9ecef; font-weight:600;">Sizes Available</td><td style="padding:8px; border:1px solid #e9ecef;">8 × 4 ft and 10 × 4 ft</td></tr>
                  <tr><td style="padding:8px; border:1px solid #e9ecef; font-weight:600;">Shades</td><td style="padding:8px; border:1px solid #e9ecef;">12 different finishes (wood grain, marble, glossy, matte, metallic)</td></tr>
                  <tr><td style="padding:8px; border:1px solid #e9ecef; font-weight:600;">Waterproof</td><td style="padding:8px; border:1px solid #e9ecef;">100% waterproof – ideal for kitchens, bathrooms, and humid areas</td></tr>
                  <tr><td style="padding:8px; border:1px solid #e9ecef; font-weight:600;">Bendability</td><td style="padding:8px; border:1px solid #e9ecef;">90-degree bendable – fits curved walls and custom designs</td></tr>
                  <tr><td style="padding:8px; border:1px solid #e9ecef; font-weight:600;">Durability</td><td style="padding:8px; border:1px solid #e9ecef;">Termite-proof, scratch-resistant, and fade-resistant</td></tr>
                  <tr><td style="padding:8px; border:1px solid #e9ecef; font-weight:600;">Installation</td><td style="padding:8px; border:1px solid #e9ecef;">Easy adhesive or gum application – no heavy carpentry needed</td></tr>
                </table>
                <h5 style="font-size:14px; font-weight:700; color:#2c3e50; margin-bottom:8px;">Key Benefits</h5>
                <ul style="font-size:14px; color:#666; line-height:1.8; margin-bottom:12px;">
                  <li><strong>100% Waterproof Protection</strong> – Monsoon-ready and humidity-resistant. These panels won’t swell, peel, or mold.</li>
                  <li><strong>Flexible & Shapeable</strong> – Bend up to 90 degrees for curved walls, corners, and custom furniture interiors.</li>
                  <li><strong>Termite & Scratch-Proof</strong> – Long-lasting finish ideal for high-traffic spaces.</li>
                  <li><strong>Eco-Friendly & Air-Cleaning</strong> – Made from sustainable bamboo fibers; charcoal core absorbs odors and dampness.</li>
                  <li><strong>Sound & Heat Insulation</strong> – Dampens noise and helps keep rooms cooler.</li>
                </ul>
            </div>
            <div>
                <img src="frontend/img/portfolio/6.svg" alt="Bamboo Charcoal Panels" style="width: 100%; border-radius: 8px;">
            </div>
        </div>
    </div>
</section>

<!-- SPC Flooring Section -->
<section style="padding: 80px 20px; background: #f8f9fa;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <h2 style="font-size: 36px; font-weight: 700; margin-bottom: 20px; color: #2c3e50;">Premium SPC Flooring</h2>
                <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    Upgrade your interiors with stylish SPC flooring solutions designed for durability, comfort, and modern aesthetics.
                </p>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px;">Velsuma SPC flooring combines waterproof performance, scratch resistance, and elegant wooden finishes to create sophisticated spaces.</p>
                
                <h4 style="font-size: 18px; font-weight: 600; color: #2c3e50; margin-bottom: 15px;">Features:</h4>
                <ul style="font-size: 14px; color: #666; line-height: 2;">
                    <li>✓ 100% Waterproof Flooring</li>
                    <li>✓ Scratch & Wear Resistant</li>
                    <li>✓ Elegant Wooden Textures</li>
                    <li>✓ Easy Click-Lock Installation</li>
                    <li>✓ Comfortable Underfoot</li>
                    <li>✓ Low Maintenance</li>
                    <li>✓ Long Product Life</li>
                </ul>
            </div>
            <div>
                <img src="frontend/img/portfolio/5.jpg" alt="SPC Flooring" style="width: 100%; border-radius: 8px;">
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
