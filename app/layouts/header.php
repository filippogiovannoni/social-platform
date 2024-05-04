<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarTogglerDemo01">
                <a class="text-center" href="#">
                    <img height="85px" style="filter: invert(1);" src="./app/assets/img/Community_Logo-removebg-preview.png" alt="logo">
                </a>
                <div class="searchbar w-25 d-flex align-items-center">
                    <input class="text-center form-control border-0 fst-italic" type="search" name="search" id="search" placeholder="Search here users">
                    <a class="px-2" href="">
                        <i class="fa fa-search search-icon text-secondary"></i>
                    </a>
                </div>
                <ul class="navbar-nav mb-2 mb-lg-0 gap-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user p-2"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="./my_posts.php">My Posts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="./most_likes.php">Most received likes</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span>
                                        Logout
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Non puoi effettuare il logout.</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-secondary">
                                        Questa funzione è in corso di sviluppo👨🏻‍💻!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>