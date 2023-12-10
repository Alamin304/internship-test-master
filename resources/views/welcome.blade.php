<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header Section -->
    <header class="bg-dark text-white text-center py-3">
        <h1>Starting this project 5:30 PM and End Time 5:55 PM</h1>
    </header>



    <main class="container-fluid my-4">
        <div class="row">
            <!-- Left Section -->
            <div class="col-lg-3">
                <div class="bg-light p-3">
                    <h2>About Me</h2>
                    <p>
                        The great pleasure of introducing myself. I’m MD Alamin and I am a full-stack Web
                        Developer<strong>(Laravel And Codeigniter)</strong>.
                        It's been 1 year, and I’m working as a web developer. I have developed many websites. I have
                        done my graduated in Computer Science from AIUB.
                    </p>
                    <p>
                        I believe that my experience with technology, specifically in the Web Development space, makes
                        me the best match for this position. In my previous job, I was responsible for maintaining and
                        Making our company website. I truly enjoyed what I was doing, which is what drew me to this
                        position with your company.
                    </p>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($posts as $post)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $post->image }}" class="card-img-top" alt="Post Image">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->description }}</p>
                                <!-- Add any additional content as needed -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>


    <footer class="bg-dark text-white text-center py-3">
        <p><a href="https://github.com/Alamin304/internship-test-master" target="_blank" class="text-white">GitHub
                Repository</a></p>
    </footer>r>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>