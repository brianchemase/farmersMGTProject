<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Management | Smart Farmer Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        .preloaderBg {
            position: fixed;
            width: 100%;
            height: 100%;
            background: #ffffff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .preloader, .preloader2 {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #4CAF50;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1.5s linear infinite;
            position: absolute;
        }

        .preloader2 {
            border-top: 8px solid #8BC34A;
            width: 40px;
            height: 40px;
            animation-duration: 1s;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4CAF50',
                        secondary: '#8BC34A',
                        accent: '#FFC107',
                        dark: '#2E7D32',
                        light: '#DCEDC8'
                    }
                }
            }
        }

        var preloadTime;

        function preloader() {
        preloadTime = setTimeout(showPage, 5000);
        }

        function showPage() {
        document.getElementById("preloader").style.display = "none";
        }

    </script>
</head>
  <!-- <div class="preloaderBg" id="preloader" onload="preloader()">
    <div class="preloader"></div>
    <div class="preloader2"></div>
  </div> -->
<body class="bg-gray-50">



    <!-- Navigation Component -->
    <script src="components/navbar.js"></script>
    <custom-navbar></custom-navbar>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-primary to-dark text-white py-20">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Empowering Farmers with <span class="text-accent">Smart</span> Technology</h1>
                <p class="text-xl mb-8">Streamline farmer registration, crop management, and quality control with our comprehensive agricultural platform.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="bg-accent hover:bg-yellow-500 text-dark font-bold py-3 px-6 rounded-lg text-center transition duration-300">Get Started</a>
                    <a href="#" class="bg-white hover:bg-gray-100 text-dark font-bold py-3 px-6 rounded-lg text-center transition duration-300">Learn More</a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="http://static.photos/agriculture/1200x630/42" alt="Happy Farmer" class="rounded-lg shadow-2xl">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-dark mb-16">Key Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div class="bg-light p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <div class="bg-primary text-white p-3 rounded-full w-14 h-14 flex items-center justify-center mb-4">
                        <i data-feather="user-plus"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Farmer Registration</h3>
                    <p class="text-gray-700">Easily register and manage farmer profiles with comprehensive details including land size, crops, and contact information.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-light p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <div class="bg-primary text-white p-3 rounded-full w-14 h-14 flex items-center justify-center mb-4">
                        <i data-feather="bar-chart-2"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Produce Analysis</h3>
                    <p class="text-gray-700">Track and analyze farm produce with detailed reports on yield, quality metrics, and historical performance.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-light p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <div class="bg-primary text-white p-3 rounded-full w-14 h-14 flex items-center justify-center mb-4">
                        <i data-feather="check-circle"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Quality Control</h3>
                    <p class="text-gray-700">Implement quality standards and track compliance across all farming operations with our integrated quality management system.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-dark mb-16">How AgriTrack Works</h2>
            <div class="flex flex-col md:flex-row gap-10 items-center">
                <div class="md:w-1/2">
                    <img src="http://static.photos/technology/1024x576/10" alt="Dashboard Preview" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <div class="mb-8">
                        <div class="flex items-start mb-4">
                            <div class="bg-secondary text-white rounded-full p-2 mr-4">
                                <span class="font-bold text-lg">1</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-dark mb-2">Register Farmers</h3>
                                <p class="text-gray-700">Collect comprehensive farmer data including land details, crops grown, and contact information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-8">
                        <div class="flex items-start mb-4">
                            <div class="bg-secondary text-white rounded-full p-2 mr-4">
                                <span class="font-bold text-lg">2</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-dark mb-2">Track Farm Activities</h3>
                                <p class="text-gray-700">Monitor planting, harvesting, and other farming activities with our intuitive interface.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-8">
                        <div class="flex items-start mb-4">
                            <div class="bg-secondary text-white rounded-full p-2 mr-4">
                                <span class="font-bold text-lg">3</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-dark mb-2">Analyze & Report</h3>
                                <p class="text-gray-700">Generate insightful reports on farm productivity, quality metrics, and financial performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-primary text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16">What Farmers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white text-dark p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="http://static.photos/people/200x200/1" alt="Farmer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">John Kamau</h4>
                            <p class="text-gray-600">Maize Farmer</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"AgriTrack has transformed how I manage my farm. The produce analysis helps me make better decisions about what to plant each season."</p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white text-dark p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="http://static.photos/people/200x200/2" alt="Farmer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Mary Wanjiku</h4>
                            <p class="text-gray-600">Coffee Farmer</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"The quality control features ensure my coffee meets international standards. My buyers trust my produce more now."</p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white text-dark p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="http://static.photos/people/200x200/3" alt="Farmer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">David Ochieng</h4>
                            <p class="text-gray-600">Dairy Farmer</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"Managing my dairy records has never been easier. The system helps me track milk production and animal health efficiently."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-accent text-dark">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Farming Operations?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join hundreds of farmers already benefiting from our comprehensive management system.</p>
            <a href="#" class="bg-dark hover:bg-green-900 text-white font-bold py-3 px-8 rounded-lg inline-block transition duration-300">Start Free Trial</a>
        </div>
    </section>

    <!-- Footer Component -->
    <script src="components/footer.js"></script>
    <custom-footer></custom-footer>

    <script src="script.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>