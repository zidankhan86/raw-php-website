
<?php

define('BASE_PATH', dirname(__DIR__));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ZERO| RAW PHP | Dark & Wine Edition</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include(BASE_PATH . '/includes/header.php'); ?>

<!-- HERO SECTION -->
<section id="hero" class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="mb-4">
                    <span class="zero-badge"><i class="bi bi-emoji-dizzy"></i> From ZERO → CRUD Mastery with RAW PHP</span>
                </div>
                <h1 class="display-4 fw-bold hero-title text-white mb-3">I built this <span style="color: #dc7f92;">RAW PHP + CRUD</span><br> from <span class="fw-extrabold">zero knowledge</span></h1>
                <p class="lead text-white-70 mb-4">Learn how to Create, Read, Update, Delete — the core of web apps. This interactive CRUD system is built with pure PHP & Bootstrap, showing you every step.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#crudSection" class="btn btn-wine"><i class="bi bi-pencil-square me-2"></i>Try Live CRUD Demo</a>
                    <a href="#contact" class="btn btn-outline-wine"><i class="bi bi-envelope-paper me-2"></i>Contact Me</a>
                </div>
                <div class="mt-4 d-flex gap-4">
                    <div><i class="bi bi-check-circle-fill" style="color: #b83b4f;"></i> <span class="small text-white-50">RAW PHP Logic</span></div>
                    <div><i class="bi bi-bootstrap-fill" style="color: #c96f80;"></i> <span class="small text-white-50">Bootstrap UI</span></div>
                    <div><i class="bi bi-hdd-stack-fill" style="color: #dd8a9a;"></i> <span class="small text-white-50">Full CRUD simulation</span></div>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <div class="bg-black bg-opacity-50 p-4 rounded-4" style="border: 1px solid #9e2a3b;">
                    <div class="code-block-wine p-3 text-start" style="background:#0c0708; border-radius:24px;">
                        <code style="color: #f0c1cb;">&lt;?php<br>  // CRUD operations ready<br>  // CREATE | READ | UPDATE | DELETE<br>  $sql = "INSERT INTO users...";<br>  echo "Zero → Hero Developer";<br>?&gt;</code>
                    </div>
                    <p class="text-wine-light small mt-3"><i class="bi bi-cpu"></i> Learn by doing: interactive CRUD below</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JOURNEY SECTION -->
<section id="journey" class="py-5 bg-wine-dark">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="zero-badge bg-dark border-wine"><i class="bi bi-map-fill"></i> The Zero to CRUD Path</span>
            <h2 class="display-6 fw-semibold mt-3 text-white">How I learned CRUD from scratch</h2>
            <p class="text-wine-light col-lg-7 mx-auto">No database experience? No problem. I built a full CRUD interface using RAW PHP & MySQL mindset — now you can try it live.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-dark-wine card p-4 h-100">
                    <div class="step-number-wine mb-3">1</div>
                    <h4 class="fw-bold text-white">Understanding CRUD</h4>
                    <p class="text-wine-light">Create, Read, Update, Delete — the four pillars. I built a mock contact list to practice each operation.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-dark-wine card p-4 h-100">
                    <div class="step-number-wine mb-3">2</div>
                    <h4 class="fw-bold text-white">RAW PHP Forms</h4>
                    <p class="text-wine-light">Designed forms for adding/editing entries. Processed with $_POST and basic arrays (mock DB).</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-dark-wine card p-4 h-100">
                    <div class="step-number-wine mb-3">3</div>
                    <h4 class="fw-bold text-white">Interactive Demo</h4>
                    <p class="text-wine-light">Below you can Add, Edit, Delete sample contacts — see RAW PHP in action, ready for real MySQL.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="crudSection" class="py-5" style="background: #0a0607;">
    <div class="container py-4">
        <div class="text-center mb-4">
            <span class="zero-badge bg-dark border-wine"><i class="bi bi-hdd-stack-fill"></i> Interactive CRUD Lab</span>
            <h2 class="display-6 fw-semibold mt-3 text-white">Learn <span class="text-wine-light">CREATE • READ • UPDATE • DELETE</span> with RAW PHP</h2>
            <p class="text-wine-light col-md-8 mx-auto">This is a fully functional CRUD simulation using PHP sessions. Add, edit, or delete contacts — exactly like real database operations. Study the code and apply to MySQL.</p>
            <?php if ($message): ?>
                <div class="alert alert-success alert-dismissible fade show mt-3 w-75 mx-auto" style="background: #2c181d; color:#e9c7cd; border:1px solid #9e2a3b;" role="alert">
                    <?= $message ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
        </div>

        <div class="row g-5">
            <!-- CRUD FORM (Create & Update) -->
            <div class="col-lg-5">
                <div class="card-dark-wine card p-4">
                    <h4 class="text-white mb-3"><i class="bi bi-pencil-square me-2 text-wine-light"></i> 
                  #
                    <hr class="my-3">
                    <div class="small text-wine-light text-center">💡 Each operation mimics SQL queries — perfect to learn before MySQL</div>
                </div>
            </div>

            <!-- READ: Display all contacts with Update/Delete options -->
            <div class="col-lg-7">
                <div class="card-dark-wine card p-0 crud-table">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover mb-0">
                            <thead>
                                <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th style="width:130px">Actions</th></tr>
                            </thead>
                            <tbody>
                               #
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-3 text-end">
                    <small class="text-wine-light"><i class="bi bi-info-circle"></i> RAW PHP session storage — ready to connect to MySQL</small>
                </div>
            </div>
        </div>

        <!-- RAW PHP code insight -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="bg-black bg-opacity-40 p-3 rounded-4" style="border-left: 4px solid #9e2a3b;">
                    <p class="text-wine-light mb-0"><i class="bi bi-code-square me-2"></i><strong>CRUD Logic example (backend):</strong> INSERT, SELECT, UPDATE, DELETE — fully implemented above in RAW PHP. Edit, add, or delete records and see instant changes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT ME SECTION: multiple ways to reach & learn CRUD -->
<section id="contact" class="py-5 bg-wine-dark">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="zero-badge bg-dark border-wine"><i class="bi bi-chat-dots-fill"></i> Let's connect & code</span>
            <h2 class="display-6 fw-semibold mt-3 text-white">Contact me — Let's build CRUD together</h2>
            <p class="text-wine-light col-lg-7 mx-auto">I'm learning RAW PHP and CRUD operations. Reach out for collaboration, questions, or just to share your zero-to-hero journey.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-dark-wine card p-4 text-center h-100">
                    <div class="icon-circle-wine mx-auto mb-3"><i class="bi bi-envelope-fill fs-3"></i></div>
                    <h5 class="text-white">Email me</h5>
                    <p class="text-wine-light small">zero2hero@crudlab.com</p>
                    <a href="mailto:zero2hero@crudlab.com" class="btn btn-outline-wine rounded-pill mt-2">Send Email</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-dark-wine card p-4 text-center h-100">
                    <div class="icon-circle-wine mx-auto mb-3"><i class="bi bi-github"></i></div>
                    <h5 class="text-white">GitHub</h5>
                    <p class="text-wine-light small">/zero-to-crud-php</p>
                    <a href="#" class="btn btn-outline-wine rounded-pill mt-2">Follow Code</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-dark-wine card p-4 text-center h-100">
                    <div class="icon-circle-wine mx-auto mb-3"><i class="bi bi-discord"></i></div>
                    <h5 class="text-white">Discord Community</h5>
                    <p class="text-wine-light small">Join #raw-php learners</p>
                    <a href="#" class="btn btn-outline-wine rounded-pill mt-2">Join Server</a>
                </div>
            </div>
        </div>
        <!-- Direct contact form for questions about CRUD -->
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-8">
                <div class="card-dark-wine card p-4">
                    <h4 class="text-white mb-3"><i class="bi bi-send me-2"></i> Ask me about CRUD or PHP</h4>
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control form-control-crud" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control form-control-crud" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control form-control-crud" rows="4" placeholder="I want to learn CRUD operations... or just say hi!" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-wine w-100 rounded-pill"><i class="bi bi-chat-right-text"></i> Send Message & Learn CRUD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IMPACT / final motivation -->
<section id="impact" class="py-5" style="background: #0a0607;">
    <div class="container text-center py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <span class="zero-badge bg-dark border-wine"><i class="bi bi-stars"></i> From Zero to CRUD Hero</span>
                <h2 class="display-6 fw-bold mt-3 text-white">You can build anything with RAW PHP</h2>
                <p class="lead text-wine-light">This entire CRUD system was built with zero pre-knowledge. I used AI, Bootstrap, and pure willpower. Now I'm sharing it so you can learn faster.</p>
                <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">
                    <div class="bg-dark p-3 rounded-3" style="background:#1c0f12!important;"><i class="bi bi-database-add fs-1 text-wine-light"></i><br><span class="text-white">CRUD Ready</span></div>
                    <div class="bg-dark p-3 rounded-3" style="background:#1c0f12!important;"><i class="bi bi-robot fs-1 text-wine-light"></i><br><span class="text-white">AI Guided</span></div>
                    <div class="bg-dark p-3 rounded-3" style="background:#1c0f12!important;"><i class="bi bi-bootstrap fs-1 text-wine-light"></i><br><span class="text-white">Bootstrap UI</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include(BASE_PATH . '/includes/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if(targetId && targetId !== "#" && targetId.startsWith('#')) {
                e.preventDefault();
                const targetElem = document.querySelector(targetId);
                if(targetElem) targetElem.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>
</body>
</html>


