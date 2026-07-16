@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="process-hero-section" style="background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; padding: 80px 20px; text-align: center;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 class="process-hero-title" style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">How We Work</h1>
        <p class="process-hero-desc" style="font-size: 18px; color: #1f3a5d; line-height: 1.6;">A Transparent, Professional 6-Step Process from Concept to Completion</p>
    </div>
</section>

<!-- Process Timeline -->
<section class="process-timeline-section" style="padding: 80px 20px; background: #f8f9fa;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <!-- Step 1 -->
        <div class="process-step-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; margin-bottom: 80px;">
            <div>
                <div class="process-step-number" style="width: 80px; height: 80px; background: #e74c3c; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin-bottom: 20px; font-weight: 700;">1</div>
                <h2 class="process-step-title" style="font-size: 32px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Consultation</h2>
                <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    We begin by understanding your unique requirements, available space, and design preferences. Our expert team listens carefully to your vision and takes time to understand your lifestyle, functional needs, and budget.
                </p>
                <ul style="font-size: 14px; color: #666; line-height: 2;">
                    <li>✓ Initial site visit and measurements</li>
                    <li>✓ Requirement gathering</li>
                    <li>✓ Budget discussion</li>
                    <li>✓ Design preference analysis</li>
                </ul>
            </div>
            <div>
                <img src="frontend/img/blog/4.jpg" alt="Consultation" style="width: 100%; border-radius: 8px;">
            </div>
        </div>

        <!-- Step 2 -->
        <div class="process-step-grid process-step-even" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; margin-bottom: 80px;">
            <div class="process-step-image">
                <img src="frontend/img/blog/5.jpg" alt="Design Planning" style="width: 100%; border-radius: 8px;">
            </div>
            <div>
                <div class="process-step-number" style="width: 80px; height: 80px; background: #3498db; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin-bottom: 20px; font-weight: 700;">2</div>
                <h2 class="process-step-title" style="font-size: 32px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Design Planning</h2>
                <p class="process-step-desc" style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    Based on your requirements, our design team creates customised layouts and modern design concepts that maximize space utilization and aesthetic appeal. We provide detailed 2D and 3D visualizations for your approval.
                </p>
                <ul style="font-size: 14px; color: #666; line-height: 2;">
                    <li>✓ 2D layout drawings</li>
                    <li>✓ 3D visualization renderings</li>
                    <li>✓ Space optimization</li>
                    <li>✓ Design revisions</li>
                </ul>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="process-step-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; margin-bottom: 80px;">
            <div>
                <div class="process-step-number" style="width: 80px; height: 80px; background: #27ae60; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin-bottom: 20px; font-weight: 700;">3</div>
                <h2 class="process-step-title" style="font-size: 32px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Material Selection</h2>
                <p class="process-step-desc" style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    We guide you through our extensive collection of premium materials, finishes, and accessories. Our team helps you select options that match your design vision, lifestyle, and maintenance preferences.
                </p>
                <ul style="font-size: 14px; color: #666; line-height: 2;">
                    <li>✓ Board material selection</li>
                    <li>✓ Laminate and acrylic options</li>
                    <li>✓ Color and finish choices</li>
                    <li>✓ Hardware and accessories</li>
                </ul>
            </div>
            <div>
                <img src="frontend/img/portfolio/1.jpg" alt="Materials" style="width: 100%; border-radius: 8px;">
            </div>
        </div>

        <!-- Step 4 -->
        <div class="process-step-grid process-step-even" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; margin-bottom: 80px;">
            <div class="process-step-image">
                <img src="frontend/img/portfolio/2.jpg" alt="Production" style="width: 100%; border-radius: 8px;">
            </div>
            <div>
                <div class="process-step-number" style="width: 80px; height: 80px; background: #f39c12; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin-bottom: 20px; font-weight: 700;">4</div>
                <h2 class="process-step-title" style="font-size: 32px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Production</h2>
                <p class="process-step-desc" style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    Once your design and materials are finalized, our skilled craftsmen begin precision manufacturing using state-of-the-art equipment and quality materials. We maintain strict quality standards throughout the production process.
                </p>
                <ul style="font-size: 14px; color: #666; line-height: 2;">
                    <li>✓ CNC cutting and machining</li>
                    <li>✓ Material assembly</li>
                    <li>✓ Quality inspections</li>
                    <li>✓ Testing and verification</li>
                </ul>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="process-step-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; margin-bottom: 80px;">
            <div>
                <div class="process-step-number" style="width: 80px; height: 80px; background: #9b59b6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin-bottom: 20px; font-weight: 700;">5</div>
                <h2 class="process-step-title" style="font-size: 32px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Installation</h2>
                <p class="process-step-desc" style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    Our experienced installation team arrives at your site to complete the project with meticulous attention to detail. We ensure perfect alignment, finish quality, and minimal disruption to your daily routine.
                </p>
                <ul style="font-size: 14px; color: #666; line-height: 2;">
                    <li>✓ Site preparation</li>
                    <li>✓ Professional installation</li>
                    <li>✓ Quality finishing</li>
                    <li>✓ Cleanliness and safety</li>
                </ul>
            </div>
            <div>
                <img src="frontend/img/portfolio/3.jpg" alt="Installation" style="width: 100%; border-radius: 8px;">
            </div>
        </div>

        <!-- Step 6 -->
        <div class="process-step-grid process-step-even" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div class="process-step-image">
                <img src="frontend/img/portfolio/4.jpg" alt="Handover" style="width: 100%; border-radius: 8px;">
            </div>
            <div>
                <div class="process-step-number" style="width: 80px; height: 80px; background: #e74c3c; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin-bottom: 20px; font-weight: 700;">6</div>
                <h2 class="process-step-title" style="font-size: 32px; font-weight: 700; margin-bottom: 15px; color: #2c3e50;">Final Handover</h2>
                <p class="process-step-desc" style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                    Upon completion, we conduct a thorough quality assurance check and hand over your newly designed space. Our team provides guidance on maintenance and care to ensure long-lasting performance and satisfaction.
                </p>
                <ul style="font-size: 14px; color: #666; line-height: 2;">
                    <li>✓ Final inspection</li>
                    <li>✓ Quality assurance check</li>
                    <li>✓ Maintenance guidance</li>
                    <li>✓ Customer satisfaction</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Process Highlights -->
<section class="process-highlights-section" style="padding: 80px 20px; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 class="process-highlights-heading" style="font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px; color: #2c3e50;">Why Our Process Works</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <div style="font-size: 40px; margin-bottom: 15px;">🎯</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Clear Communication</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">We maintain transparent communication throughout every step to ensure your vision is understood and executed perfectly.</p>
            </div>

            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <div style="font-size: 40px; margin-bottom: 15px;">⚙️</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Quality Control</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Multiple inspections and quality checks ensure every detail meets our high standards before and after installation.</p>
            </div>

            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <div style="font-size: 40px; margin-bottom: 15px;">⏰</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Timely Delivery</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">We respect your schedule and deliver projects on time, minimizing disruption to your daily life and routines.</p>
            </div>

            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <div style="font-size: 40px; margin-bottom: 15px;">💡</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Expert Guidance</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Our experienced team provides expert recommendations and guidance throughout the entire design and installation journey.</p>
            </div>

            <div style="padding: 30px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                <div style="font-size: 40px; margin-bottom: 15px;">✅</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">Customer Satisfaction</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Your satisfaction is our priority. We ensure complete happiness with the final result and provide ongoing support.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="process-cta-section" style="padding: 60px 20px; background: linear-gradient(135deg, #f5fbff 0%, #d8f0ff 100%); color: #1f3a5d; text-align: center;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h2 class="process-cta-title" style="font-size: 32px; font-weight: 700; margin-bottom: 20px;">Start Your Journey Today</h2>
        <p class="process-cta-desc" style="font-size: 16px; margin-bottom: 30px; opacity: 0.9;">Let's begin the consultation process and turn your dream space into reality.</p>
        <a href="/contact" class="btn" style="background: #e74c3c; color: white; padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; display: inline-block;">Book Your Consultation</a>
    </div>
</section>
@endsection
