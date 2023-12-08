<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/Logo (2).png">
    <title>Politica de Privacidade</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
}

h1 {
    margin: 0;
}

.content {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

h2 {
    margin-top: 20px;
}

p {
    line-height: 1.5;
}

footer {
    background-color: #f4f4f4;
    text-align: center;
    padding: 10px;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: 250px;
}
.check {
  cursor: pointer;
  position: relative;
  margin: auto;
  width: 18px;
  height: 18px;
  -webkit-tap-highlight-color: transparent;
  transform: translate3d(0, 0, 0);
  margin-left: 35%;
}

.check:before {
  content: "";
  position: absolute;
  top: -15px;
  left: -15px;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: rgba(34,50,84,0.03);
  opacity: 0;
  transition: opacity 0.2s ease;
}

.check svg {
  position: relative;
  z-index: 1;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #c8ccd4;
  stroke-width: 1.5;
  transform: translate3d(0, 0, 0);
  transition: all 0.2s ease;
}

.check svg path {
  stroke-dasharray: 60;
  stroke-dashoffset: 0;
}

.check svg polyline {
  stroke-dasharray: 22;
  stroke-dashoffset: 66;
}

.check:hover:before {
  opacity: 1;
}

.check:hover svg {
  stroke: #4285f4;
}

#cbx:checked + .check svg {
  stroke: #4285f4;
}

#cbx:checked + .check svg path {
  stroke-dashoffset: 60;
  transition: all 0.3s linear;
}

#cbx:checked + .check svg polyline {
  stroke-dashoffset: 42;
  transition: all 0.2s linear;
  transition-delay: 0.15s;
}
button {
  width: fit-content;
  min-width: 100px;
  height: 45px;
  padding: 8px;
  border-radius: 5px;
  border: 2.5px solid #E0E1E4;
  box-shadow: 0px 0px 20px -20px;
  cursor: pointer;
  background-color: white;
  transition: all 0.2s ease-in-out 0ms;
  user-select: none;
  font-family: 'Poppins', sans-serif;
  margin-left: 45%;
}

button:hover {
  background-color: #F2F2F2;
  box-shadow: 0px 0px 20px -18px;
}

button:active {
  transform: scale(0.95);
}

</style>
<body>
    <header>
        <h1>Politica de Privacidade</h1>
    </header>
    <div class="content">
        <h2>1. Aceitação da Politica de Privacidade</h2>
        <p>Ao acessar e utilizar o site [Nome do Site], você concorda em cumprir e ficar vinculado aos seguintes termos e condições de uso. Se você não concorda com esses termos, por favor, não utilize o site.</p>
        <h2>2. Uso do Conteúdo</h2>

Todo o conteúdo disponível neste site, incluindo textos, imagens, vídeos, áudios e outros materiais, é de propriedade do [Nome da Empresa] ou de seus respectivos proprietários e é protegido por leis de direitos autorais e outras leis de propriedade intelectual. Você pode utilizar o conteúdo somente para fins pessoais, não comerciais e educacionais. Qualquer uso não autorizado do conteúdo é estritamente proibido.

<h2>3. Regras de Uso</h2>

Você concorda em não usar o site para qualquer finalidade ilegal ou não autorizada.
Você não deve interferir ou interromper a segurança do site, acessar áreas restritas sem permissão ou tentar prejudicar o funcionamento adequado do site.
Você concorda em não enviar conteúdo ofensivo, difamatório, obsceno, discriminatório ou que viole os direitos de terceiros.
Você concorda em não usar o site para qualquer forma de spam, phishing ou atividades maliciosas.
Você é responsável por manter a confidencialidade de suas informações de login e não deve compartilhá-las com terceiros.
<h2>4. Privacidade</h2>

Ao utilizar o site, você concorda com a nossa Política de Privacidade, que descreve como coletamos, armazenamos e utilizamos suas informações pessoais. Você pode acessar a Política de Privacidade [aqui](link para a política de privacidade).

<h2>5. Mudanças nos Termos de Uso</h2>

Nós nos reservamos o direito de modificar ou atualizar estes Termos de Uso a qualquer momento. Quaisquer alterações entrarão em vigor imediatamente após a publicação dos termos revisados no site. É sua responsabilidade verificar periodicamente os Termos de Uso para estar ciente de quaisquer alterações.

<h2>6. Rescisão</h2>

Podemos encerrar ou suspender o seu acesso ao site a qualquer momento, por qualquer motivo, sem aviso prévio.

<h2>7. Isenção de Responsabilidade</h2>

O uso do site é por sua conta e risco. Não garantimos que o site estará livre de erros, vírus ou interrupções.
        <!-- Outras seções dos termos aqui -->
        
        <h2>8. Contato</h2>
        <p>Se você tiver alguma dúvida ou preocupação sobre estes Termos de Uso, entre em contato conosco através das informações fornecidas na seção de contato do site.</p>
    </div>
    <div class="container">
        <input type="checkbox" id="cbx" style="display: none;">
        <label for="cbx" class="check">
            <svg width="18px" height="18px" viewBox="0 0 18 18">
                <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                <polyline points="1 9 7 14 15 4"></polyline>
            </svg>
            <a>Li e Aceito todas politicas de privacidade indicados</a>
        </label>
    </div>
    <button>
        Submit
    </button>
    </a>
    <footer>
        <p>&copy; [2023] [Aconchequei]. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
