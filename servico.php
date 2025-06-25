<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EM Piscina - Nossos Serviços</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
  <!-- Navbar igual às outras páginas -->
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid d-flex justify-content-between align-items-center position-relative">
      <button class="btn btn-outline-light me-2" onclick="toggleSidebar()">&#9776;</button>
      
      <a class="navbar-brand mx-auto position-absolute top-50 start-50 translate-middle" href="index.html">
        <img src="Imagens/Imagem 2.png" alt="EM Piscina" class="logo-navbar">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="preco.html">Preços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeria.html">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="servico.html">Serviço</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-5">
    <h1 class="text-center mb-5 servico-titulo">
      <span>Nossos Serviços Especializados</span>
    </h1>

    <div class="row g-4">
      <!-- Serviço 1 -->
      <div class="col-md-4">
        <div class="card servico-card h-100 border-primary">
          <div class="card-body text-center">
            <i class="bi bi-droplet-fill text-primary servico-icone"></i>
            <h3 class="card-title">Limpeza Completa</h3>
            <p class="card-text">
              Aspiração, escovação e tratamento químico profissional para deixar sua piscina cristalina.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Serviço 2 -->
      <div class="col-md-4">
        <div class="card servico-card h-100 border-primary">
          <div class="card-body text-center">
            <i class="bi bi-speedometer2 text-primary servico-icone"></i>
            <h3 class="card-title">Ajuste Químico</h3>
            <p class="card-text">
              Balanceamento perfeito de pH, alcalinidade e cloro para água saudável e segura para o uso.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Serviço 3 -->
      <div class="col-md-4">
        <div class="card servico-card h-100 border-primary">
          <div class="card-body text-center">
            <i class="bi bi-water text-primary servico-icone"></i>
            <h3 class="card-title">Hidrolavagem</h3>
            <p class="card-text">
              Limpeza profunda com equipamentos corretos para remover algas e resíduos.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Seção de Destaque -->
    <div class="servico-destaque mt-5 p-4 rounded">
      <h2 class="text-center mb-4">Como eu trabalho</h2>
      <div class="row">
        <div class="col-md-6">
          <ul class="servico-lista">
            <li><i class="bi bi-check-circle-fill"></i> trabalho excepcional</li>
            <li><i class="bi bi-check-circle-fill"></i> Produtos de alta qualidade</li>
            <li><i class="bi bi-check-circle-fill"></i> Vídeos detalhados</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="servico-lista">
            <li><i class="bi bi-check-circle-fill"></i> Atendimento com boa didática</li>
            <li><i class="bi bi-check-circle-fill"></i> Garantia por escrito</li>
            <li><i class="bi bi-check-circle-fill"></i> Orçamento correto</li>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-primary text-white text-center py-4 mt-5">
    <div class="container">
      <p class="mb-1">&copy; 2025 EM Piscina. Todos os direitos reservados.</p>
      <p class="mb-0">Desenvolvido por [Elton Magalhães]</p>
    </div>
  </footer>

  <a href="https://wa.me/5544998521670" class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.style.width = sidebar.style.width === '250px' ? '0' : '250px';
    }
  </script>
</body>
</html>