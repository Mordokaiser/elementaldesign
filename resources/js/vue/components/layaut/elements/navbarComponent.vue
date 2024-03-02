<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
            <!-- Logo a la derecha -->
            <a class="navbar-brand ms-auto" href="/">
                <img :src="logoUrl" class="logo">
            </a>

            <!-- Botón de hamburguesa para dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Elementos de menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Suscripciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <img :src="userIconUrl" alt="User Icon" class="userIcon">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">nombre xD</a></li>
                            <li><a class="dropdown-item" href="/login">iniciar sesión</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
// Importar imágenes
const logoUrl = '/images/logos/Logo avanzado para fondos oscuros v2 1.png';
const userIconUrl = '/images/icons/userWhite.svg';
</script>

<style>
.navbar-dark .navbar-nav .nav-link {
    color: white;
}

.logo {
    width: 187px;
    height: 41px;
}

.userIcon {
    width: 25px;
    height: 25px;
}

.dropdown-toggle::after {
    display: none;
}
</style>
