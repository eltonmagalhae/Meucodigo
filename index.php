<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EM Piscina</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
 <div id="sidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
  
  <!-- Seção Sobre -->
  <div class="sidebar-section">
    <a href="#sobre" class="sidebar-title">Sobre</a>
    <div class="sidebar-content">
      <p>Especialista em deixar a sua piscina cristalina e para diversão. </p>
    </div>
  </div>

  <!-- Seção Contatos -->
  <div class="sidebar-section">
    <a href="#contatos" class="sidebar-title">Contatos</a>
    <div class="sidebar-content">
      <p><i class="fas fa-phone"></i> (44)98852-1670</p>
      <a href="mailto:eltoninfinite987@gmail.com" class="email-link">
      eltoninfinite987@gmail.com
      <p><i class="fas fa-map-marker-alt"></i> Campo Mourão/PR</p>
    </div>
  </div>
</div>

  <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid d-flex justify-content-between align-items-center position-relative">

      <button class="btn btn-outline-light me-2" onclick="toggleSidebar()">&#9776;</button>

      <a class="navbar-brand mx-auto position-absolute top-50 start-50 translate-middle" href="#">
        <img src="Imagem/Imagem 2.png" alt="EM Piscina" class="logo-navbar" />
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#inicio">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="precos.php">Preços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="galeria.php">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servico.php">Serviço</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <main class="container mt-4">
    <div class="titulo-container">
      <h1 class="titulo-detalhado">
        Bem-vindo à <span class="destaque-empresa">EM Piscina</span>
      </h1>
    </div>
  </main>

  <<section class="container my-4" id="sobre-nos">
  <div class="row align-items-center gx-5">
    
    <!-- Vídeo (esquerda) -->
    <div class="col-lg-6 video-wrapper">
      <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow">
        <video controls poster="Imagens/ChatGPT Image 16 de mai. de 2025, 13_40_59.png">
          <source src="Imagem/Vídeo do WhatsApp de 2025-05-16 à(s) 12.26.48_6fa3388e.mp4" type="video/mp4">
        </video>
      </div>
    </div>
    
    <!-- Texto "Sobre Nós" (direita) -->
    <div class="col-lg-6 text-wrapper ps-lg-5 mt-4 mt-lg-0">
      <h2 class="mb-3 fw-bold">Sobre Nós</h2>
      <p class="lead mb-3 text-primary">Especialistas em deixar piscinas cristalinas</p>
      
      <div class="sobre-texto">
        <p class="mb-3">A <strong>EM Piscina:</strong> Com mais de 2 anos de experiência, oferecemos produtos de alta qualidade e serviços com bons resultados para deixar sua piscina sempre cristalina e pronta para o uso.</p>
        <p class="mb-3">Oferecemos produtos de alta qualidade e serviços especializados para deixar sua piscina perfeita para o uso.</p>
        <p class="mb-4">Antendem as necessidades específicas de cada cliente, garantindo a satisfação e a qualidade do serviço prestado e um serviço valorizado</p>
      </div>
      
      <a href="#contatos" class="btn btn-primary btn-lg px-4">
        <i class="fas fa-phone me-2"></i>Entre em Contato
      </a>
    </div>
  </div>
</section>


  <section class="container my-5" id="produtos">
    <h2 class="text-center mb-4">Nossos Produtos</h2>
    <div class="row justify-content-center g-4" id="produtos">
      <!-- Produto 1 -->
      <div class="col-lg-2 col-md-3 col-6 mb-4">
        <div class="produto-card h-100 p-3" onclick="mostrarDetalhesProduto('Cloro NeoClor', 'R$ 250,00')">
          <img src="Imagens/cloro_neoclor_premium_10kg_285_2_3f10060fc1d5b163069cf9dcdcb5ceb7-Photoroom.png" alt="Cloro" class="img-fluid mb-3" />
          <h6 class="text-center">Cloro para Piscina</h6>
          <div class="produto-info" style="display: none;">
            <p class="produto-preco text-success fw-bold mb-2">R$ 250,00</p>
            <a href="https://wa.me/5544998521670?text=Olá!%20Gostaria%20de%20comprar%20o%20produto:%20CLORO%20PARA%20PISCINA" 
            class="btn btn-sm btn-primary w-100" target="_blank">Comprar</a>
          </div>
        </div>
      </div>

      <!-- Produto 2 -->
      <div class="col-lg-2 col-md-3 col-6 mb-4">
        <div class="produto-card h-100 p-3" onclick="mostrarDetalhesProduto('Elevador de PH', 'R$ 69,90')">
          <img src="Imagens/NEOpH--Elevador-de-pH-2kg-Neoclor.webp" alt="Elevador de PH" class="img-fluid mb-3" />
          <h6 class="text-center">Elevador de PH</h6>
          <div class="produto-info" style="display: none;">
            <p class="produto-preco text-success fw-bold mb-2">R$ 69,90</p>
            <a href="https://wa.me/5544998521670?text=Olá!%20Gostaria%20de%20comprar%20o%20produto:%20CLORO%20PARA%20PISCINA" 
            class="btn btn-sm btn-primary w-100" target="_blank">Comprar</a>
          </div>
        </div>
      </div>

      <!-- Produto 3 -->
      <div class="col-lg-2 col-md-3 col-6 mb-4">
        <div class="produto-card h-100 p-3" onclick="mostrarDetalhesProduto('Algicida Choque', 'R$ 250,00')">
          <img src="Imagens/Algicida.webp" alt="Algicida Choque" class="img-fluid mb-3" />
          <h6 class="text-center">Algicida Choque</h6>
          <div class="produto-info" style="display: none;">
            <p class="produto-preco text-success fw-bold mb-2">R$ 29,90</p>
            <a href="https://wa.me/5544998521670?text=Olá!%20Gostaria%20de%20comprar%20o%20produto:%20CLORO%20PARA%20PISCINA" 
            class="btn btn-sm btn-primary w-100" target="_blank">Comprar</a>
          </div>
        </div>
      </div>

      <!-- Produto 4 -->
      <div class="col-lg-2 col-md-3 col-6 mb-4">
        <div class="produto-card h-100 p-3" onclick="mostrarDetalhesProduto('Alcalinidade', 'R$ 250,00')">
          <img src="Imagens/Alcalinidade.png" alt="Alcalinidade" class="img-fluid mb-3" />
          <h6 class="text-center">Alcalinidade</h6>
          <div class="produto-info" style="display: none;">
            <p class="produto-preco text-success fw-bold mb-2">R$ 12,90</p>
            <a href="https://wa.me/5544998521670?text=Olá!%20Gostaria%20de%20comprar%20o%20produto:%20CLORO%20PARA%20PISCINA" 
            class="btn btn-sm btn-primary w-100" target="_blank">Comprar</a>
          </div>
        </div>
      </div>

      <!-- Produto 5 -->
      <div class="col-lg-2 col-md-3 col-6 mb-4">
        <div class="produto-card h-100 p-3" onclick="mostrarDetalhesProduto('Clarificante', 'R$ 250,00')">
          <img src="Imagens/Clarificante.png" alt="Clarificante" class="img-fluid mb-3" />
          <h6 class="text-center">Clarificante</h6>
          <div class="produto-info" style="display: none;">
            <p class="produto-preco text-success fw-bold mb-2">R$ 27,90</p>
            <a href="https://wa.me/5544998521670?text=Olá!%20Gostaria%20de%20comprar%20o%20produto:%20CLORO%20PARA%20PISCINA" 
            class="btn btn-sm btn-primary w-100" target="_blank">Comprar</a>
          </div>
        </div>
      </div>

      <!-- Produto 6 -->
      <div class="col-lg-2 col-md-3 col-6 mb-4">
        <div class="produto-card h-100 p-3" onclick="mostrarDetalhesProduto('Limpa Bordas', 'R$ 250,00')">
          <img src="Imagens/neobord_limpa_bordas-Photoroom.png" alt="Limpa Bordas" class="img-fluid mb-3" />
          <h6 class="text-center">Limpa Bordas</h6>
          <div class="produto-info" style="display: none;">
            <p class="produto-preco text-success fw-bold mb-2">R$ 22,90</p>
            <a href="https://wa.me/5544998521670?text=Olá!%20Gostaria%20de%20comprar%20o%20produto:%20CLORO%20PARA%20PISCINA" 
            class="btn btn-sm btn-primary w-100" target="_blank">Comprar</a>
          </div>
        </div>
      </div>

      <!-- Produto 7 -->
      <div class="col-lg-2 col-md-3 col-6 mb-4">
        <div class="produto-card h-100 p-3" onclick="mostrarDetalhesProduto('Sulfato de alumínio', 'R$ 250,00')">
          <img src="Imagens/Neofato-Sulfato-de-Aluminio-Photoroom.png" alt="Cloro" class="img-fluid mb-3" />
          <h6 class="text-center">Sulfato de alumínio</h6>
          <div class="produto-info" style="display: none;">
            <p class="produto-preco text-success fw-bold mb-2">R$ 20,00</p>
            <a href="https://wa.me/5544998521670?text=Olá!%20Gostaria%20de%20comprar%20o%20produto:%20CLORO%20PARA%20PISCINA" 
            class="btn btn-sm btn-primary w-100" target="_blank">Comprar</a>
          </div>
        </div>
      </div>
      
      <!-- Produto 8 -->
      <div class="col-lg-2 col-md-3 col-6 mb-4">
        <div class="produto-card h-100 p-3" onclick="mostrarDetalhesProduto('Eliminador de Oleosidade', 'R$ 250,00')">
          <img src="Imagens/Eliminador de oleosidade-Photoroom.png" alt="Cloro" class="img-fluid mb-3" />
          <h6 class="text-center">Eliminador de Oleosidade</h6>
          <div class="produto-info" style="display: none;">
            <p class="produto-preco text-success fw-bold mb-2">R$ 39,90</p>
            <a href="https://wa.me/5544998521670?text=Olá!%20Gostaria%20de%20comprar%20o%20produto:%20CLORO%20PARA%20PISCINA" 
            class="btn btn-sm btn-primary w-100" target="_blank">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="container my-5" id="carrossel-produtos">
    <h2 class="text-center mb-4">Mais Produtos</h2>

    <div class="row align-items-center">
      <!-- Carrossel de miniaturas -->
      <div class="col-md-8">
        <div class="d-flex position-relative align-items-center">
          <button class="seta seta-esquerda" onclick="rolarMiniaturas(-1)">&#10094;</button>
          
          <div class="carrossel-container">
            <div class="carrossel-produtos" id="miniaturas">
              <div class="carrossel-item" onclick="mostrarDetalhes(0)">
                <img src="Imagens/cloro_neoclor_premium_10kg_285_2_3f10060fc1d5b163069cf9dcdcb5ceb7-Photoroom.png" alt="Produto 1" />
                <div class="carrossel-item-info">
                  <span>Cloro NeoClor</span>
                </div>
              </div>
              <div class="carrossel-item" onclick="mostrarDetalhes(1)">
                <img src="Imagens/NEOpH--Elevador-de-pH-2kg-Neoclor.webp" alt="Produto 2" />
                <div class="carrossel-item-info">
                  <span>Elevador de PH</span>
                </div>
              </div>
              <div class="carrossel-item" onclick="mostrarDetalhes(2)">
                <img src="Imagens/Algicida.webp" alt="Produto 3" />
                <div class="carrossel-item-info">
                  <span>Algicida de Choque</span>
                </div>
              </div>
              <div class="carrossel-item" onclick="mostrarDetalhes(3)">
                <img src="Imagens/Alcalinidade.png" alt="Produto 4" />
                <div class="carrossel-item-info">
                  <span>Alcalinidade</span>
                </div>
              </div>
              <div class="carrossel-item" onclick="mostrarDetalhes(4)">
                <img src="Imagens/Clarificante.png" alt="Produto 5" />
                <div class="carrossel-item-info">
                  <span>Clarificante</span>
                </div>
              </div>
              <div class="carrossel-item" onclick="mostrarDetalhes(5)">
                <img src="Imagens/neobord_limpa_bordas-Photoroom.png" alt="Produto 6" />
                <div class="carrossel-item-info">
                  <span>Limpa Bordas</span>
                </div>
              </div>
              <div class="carrossel-item" onclick="mostrarDetalhes(6)">
                <img src="Imagens/Neofato-Sulfato-de-Aluminio-Photoroom.png" alt="Produto 7" />
                <div class="carrossel-item-info">
                  <span>Sulfato de alumínio</span>
                </div>
              </div>
              <div class="carrossel-item" onclick="mostrarDetalhes(7)">
                <img src="Imagens/Eliminador de oleosidade-Photoroom.png" alt="Produto 8" />
                <div class="carrossel-item-info">
                  <span>Eliminador de Oleosidade</span>
                </div>
              </div>
            </div>
          </div>
          
          <button class="seta seta-direita" onclick="rolarMiniaturas(1)">&#10095;</button>
        </div>
      </div>

      <!-- Painel com detalhes -->
      <div class="col-md-4 mt-4 mt-md-0">
        <div class="detalhes-produto" id="painel-detalhes">
          <div class="detalhes-imagem">
            <img id="imagem-detalhe" src="Imagens/cloro_neoclor_premium_10kg_285_2_3f10060fc1d5b163069cf9dcdcb5ceb7-Photoroom.png" alt="Detalhe" />
          </div>
          <div class="detalhes-info">
            <h5 id="nome-produto">Cloro NeoClor</h5>
            <p id="descricao-produto">Alta eficiência para manter a piscina limpa</p>
            <div class="detalhes-preco">
              <span id="preco-produto">R$ 250,00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Seção de Contatos -->
<section class="container my-5" id="contatos">
    <h2 class="text-center mb-4">Fale Conosco</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Seu nome" />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com" />
          </div>
          <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" rows="4" placeholder="Sua mensagem..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const produtos = [
      {
        imagem: "Imagens/cloro_neoclor_premium_10kg_285_2_3f10060fc1d5b163069cf9dcdcb5ceb7-Photoroom.png",
        nome: "Cloro NeoClor",
        descricao: "Alta eficiência para manter a piscina limpa",
        preco: "R$ 250,00"
      },
      {
        imagem: "Imagens/NEOpH--Elevador-de-pH-2kg-Neoclor.webp",
        nome: "Elevador de PH",
        descricao: "Neutraliza resíduos e mantém a água equilibrada",
        preco: "R$ 69,90"
      },
      {
        imagem: "Imagens/Algicida.webp",
        nome: "Algicida de Choque",
        descricao: "Elimina algas e mantém a piscina protegida",
        preco: "R$ 29,90"
      },
      {
        imagem: "Imagens/Alcalinidade.png",
        nome: "Alcalinidade",
        descricao: "Mantém o equilíbrio da água para maior durabilidade",
        preco: "R$ 12,90"
      },
      {
        imagem: "Imagens/Clarificante.png",
        nome: "Clarificante",
        descricao: "Deixa a água cristalina e transparente",
        preco: "R$ 27,90"
      },
      {
        imagem: "Imagens/neobord_limpa_bordas-Photoroom.png",
        nome: "Limpa Bordas",
        descricao: "Limpeza eficiente das bordas da piscina",
        preco: "R$ 22,90"
      },
      {
        imagem: "Imagens/Neofato-Sulfato-de-Aluminio-Photoroom.png",
        nome: "Sulfato de alumínio",
        descricao: "Auxilia na clarificação da água",
        preco: "R$ 20,00"
      },
      {
        imagem: "Imagens/Eliminador de oleosidade-Photoroom.png",
        nome: "Eliminador de Oleosidade",
        descricao: "Remove oleosidade da água e das bordas",
        preco: "R$ 39,90"
      }
    ];

    function mostrarDetalhes(index) {
      const produto = produtos[index];
      document.getElementById('imagem-detalhe').src = produto.imagem;
      document.getElementById('imagem-detalhe').alt = produto.nome;
      document.getElementById('nome-produto').textContent = produto.nome;
      document.getElementById('descricao-produto').textContent = produto.descricao;
      document.getElementById('preco-produto').textContent = produto.preco;
      
      // Adiciona classe ativa ao item selecionado
      const items = document.querySelectorAll('.carrossel-item');
      items.forEach(item => item.classList.remove('ativo'));
      items[index].classList.add('ativo');
    }

    let posicaoMiniaturas = 0;
    const itemWidth = 180; // Largura de cada item do carrossel

    function rolarMiniaturas(direcao) {
      const container = document.getElementById('miniaturas');
      const containerWidth = container.parentElement.offsetWidth;
      const maxScroll = container.scrollWidth - containerWidth;
      
      posicaoMiniaturas += direcao * itemWidth * 2;
      
      if (posicaoMiniaturas < 0) posicaoMiniaturas = 0;
      if (posicaoMiniaturas > maxScroll) posicaoMiniaturas = maxScroll;
      
      container.style.transform = `translateX(-${posicaoMiniaturas}px)`;
    }

    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      if (sidebar.style.width === '250px') {
        sidebar.style.width = '0';
      } else {
        sidebar.style.width = '250px';
      }
    }

    function playVideo(element) {
      const container = element.parentElement;
      const video = container.querySelector('.video-real');
      
      container.classList.add('playing');
      video.play();
      
      container.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    document.addEventListener('DOMContentLoaded', function() {
      mostrarDetalhes(0);
    });

    function mostrarDetalhesProduto(nome, preco) {
      document.querySelectorAll('.produto-info').forEach(el => {
        el.style.display = 'none';
      });

      const card = event.currentTarget;
      const info = card.querySelector('.produto-info');
      info.style.display = 'block';

      info.querySelector('.produto-preco').textContent = preco;
    }
  </script>
  
  <footer class="bg-primary text-white text-center py-4 mt-5">
    <div class="container">
      <p class="mb-1">&copy; 2025 EM Piscina. Todos os direitos reservados.</p>
      <p class="mb-0">Desenvolvido por [Elton Magalhes]</p>
    </div>
  </footer>
  
  <a href="https://wa.me/5544998521670" class="whatsapp-float" target="_blank" rel="noopener">
    <i class="bi bi-whatsapp"></i>
  </a>
</body>
</html>