<nav class="navbar sticky-top navbar-expand-lg navbar-light text-dark bg-white" id="navbar-example">
        <div class="container-fluid nav-container d-flex align-content-stretch">
            <a class="navbar-brand" href="index.php"><img src="./img/logo.png" alt="Logo" width="70em" style="border: none;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0" style="font-family: 'Poppins', sans-serif; font-weight:600; text-transform:uppercase">
                    <li class="nav-item">
                    <a class="nav-link active btn btn-round" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link btn" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Activités
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn" href="#orientation">Orientation</a>
                            <a class="dropdown-item btn" href="#formation">Formation</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a id="contact-page" class="nav-link btn" href="./contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-dark btn-rounded" href="./inscription.php">Je m'inscris</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="input-group">
                
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" id="search-icon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="Chercher" id="search-input">
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-default">
                            <a href="connexion.php"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>