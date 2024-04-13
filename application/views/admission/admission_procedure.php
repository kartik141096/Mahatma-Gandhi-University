<div class="bradcam_area breadcam_bg bradcam_overlay">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Admission Process</h3>
                    <p><a href="<?=base_url()?>">Home /</a> Admission Process</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='faq'>
  <input id='faq-a' type='checkbox'>
  <label for='faq-a'>
    <p class="faq-heading">=> Step 1</p>
    <div class='faq-arrow'></div>
    <div style="text-align:center">

        <p class="faq-text"><strong>The Application fee of Rs.1000/- for MGU-GET can be deposited through the below mentioned payment modes.</strong></p>
		<ul>
            <li> <i class="flaticon-right"></i> Depositing cash at Mahatma Gandhi University campus. </li><br>
			<li> <i class="flaticon-right"></i> Depositing cash at your nearest PNB/Axis Bank branch.</li><br>
			<li> <i class="flaticon-right"></i> Demand draft must be drawn in favour of "Mahatma Gandhi University" payable at Meghalaya deposited at University Campus. <br>(Note: Write your Name, Father's Name, Contact Number & Course opted at the back of the DD) </li><br>
			<li> <i class="flaticon-right"></i> Enquiries can be made at tel:+918800398794 </li><br>
			<li> <i class="flaticon-right"></i> The candidate will be eligible for Counselling and Personal Interview (PI) ONLY after submitting the DD at University. </li><br>
			<li> <i class="flaticon-right"></i> Application fees can also be made through Credit Card/Debit card. </li><br>
		</ul>
    </div>
  </label>
  <input id='faq-b' type='checkbox'>
  <label for='faq-b'>
        <p class="faq-heading">=> Step 2 (A)</p>
        <div class='faq-arrow'></div>
        <div style="text-align:center">
            <p class="faq-text"><strong>A candidate who has already appeared and qualified National Level Test.</strong></p>
            <p class="faq-text">(AIEEE/UPSEE/DCE/CAT/MAT/SAT/GMAT/ENAT/EMAT)</p>
            <p class="faq-text">After submission of application form and admission fees, candidate will be called for Counselling and Personal Interview (PI) as per the merit list uploaded on our website.</p>
        </div>
  </label>

  <input id='faq-c' type='checkbox'>
  <label for='faq-c'>
    <p class="faq-heading">=> Step 2 (B)</p>
    <div class='faq-arrow'></div>
      <div style="text-align:center">
          <p class="faq-text"><strong>A candidate who will appear in MGU-GET</strong></p>
          <p class="faq-text"><i class="flaticon-right"></i> After submission of application form and admission fees, candidate is eligible to appear in MGU-GET at Mahatma Gandhi University Campus (Meghalaya) or at any approved test centre of MGU.</p>
          <p class="faq-text"><i class="flaticon-right"></i> Candidates who will qualify the exam will be called for Counselling and Personal Interview (PI).</p>
          <p class="faq-text"><i class="flaticon-right"></i> The details of MGU-GET process is available at approved test centres of MGU.</p>
          <p class="faq-text"><i class="flaticon-right"></i> Do remember the user ID and password of MGU-GET as it will be needed at the time of online exam.</p>
          <p class="faq-text"><i class="flaticon-right"></i> After receiving of application fee of ₹`1000, the university will send confirmation of the candidates to its exam centre.</p>
          <p class="faq-text"><i class="flaticon-right"></i> Finally, the exam centre will activate the Online Examination Booking System (OEBS) for the candidates.</p>
          <p class="faq-text">(<strong>Note:</strong> Test can also be conducted at Mahatma Gandhi University Campus in Meghalaya.)</p>
      </div>
  </label>

  <br><br><br>
  <div style="text-align:center">
    <h3><strong>Online Examination Booking System</strong></h3><br>
    <ul>
      <li>OEBS will help the candidates to book their date and time along with the exam centre of their own choice from the given options available. </li><br>
			<li>After enrolling for exam through OEBS, a candidate will be able to generate a tamper proof admit card containing all the relevant details of Examination.</li><br>
			<li>Candidate will have to carry the two copies of hall ticket to the examination centre with his/her recent passport size photograph pasted on it. </li><br>
			<li>The exam centre will verify the candidate's hall ticket and will retain one copy which will be submitted to Mahatma Gandhi University for verification/validation of the candidate during the time of personal interview. </li><br>
			<li>(<strong>Note:</strong> Candidate should bring their photo ID proof (Original), Application Fee Proof at the time of MGU-GET. Without Photo ID proof (Original) and Application Fee Proof, candidate will not be eligible to give the exam.) </li><br>
		</ul>
  </div><br><br>




<?php require_once('./application/views/common/connect_with_us.php'); ?>
<?php require_once('./application/views/common/departments.php'); ?>









<style>
  .faq-item-hide {
    display: none;
  }

  .faq-heading {
    /* font-family: Montserrat; */
    padding-top: 15px;
    font-weight: 600;
    font-size: 19px;
    text-indent: 10px;
    color: #041D5C;
    transition: text-indent 0.2s;
  }

  .faq-text {
    /* font-family: Montserrat; */
    font-weight: 400;
    font-size: 16px;
    color: #111;
    padding-left: 20px;
    padding-right: 100px;
    margin-bottom: 20px;
    opacity: 0; /* Inicialmente invisível */
    transition: opacity 0.6s ease-in-out; /* Transição de opacidade */
  }

  .faq {
    width: 100%;
    margin: 0 auto;
    background: white;
    border-radius: 4px;
    position: relative;
  /* border: 1px, solid #E1E1E1*/;
  }

  .faq label {
    display: block;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    height: 50px; /* Ajustar conforme necessário */
    padding-top: 8px;
    padding-bottom: 10px;
    background-color: #EDF0EF;
    border-bottom: 1px solid #fff;
    transition: all 0.3s ease; /* Suaviza a transição da borda */
    box-sizing: border-box; /* Garante que a borda seja incluída no cálculo da dimensão */
  }

  .faq input[type="checkbox"] {
    display: none;
  }

  .faq .faq-arrow {
    width: 10px;
    height: 10px;
    transition: transform 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    border-top: 2px solid #041D5C;
    border-right: 2px solid #041D5C;
    float: right;
    position: relative;
    top: -30px;
    right: 27px;
    transform: rotate(45deg);
  }

  .faq input[type="checkbox"]:checked + label > .faq-arrow {
    transform: rotate(135deg);
  }

  .faq input[type="checkbox"]:checked + label {
    /*background: #;*/
    color: #041D5C;
    height: auto; /* Altura ajustada para conteúdo */
    transition: height 0.8s, border 0.3s ease; /* Adiciona transição para borda */
    padding-top: 0; /* Ajusta o padding */
  }

  .faq input[type='checkbox']:not(:checked) + label {
    height: 70px;/* Altura quando não checado */
  }

  /* Aplica borda somente no lado esquerdo para hover e quando está checado */
  .faq label:hover, .faq input[type="checkbox"]:checked + label {
    border-left: 3px solid #041D5C; /* Bordas somente no lado esquerdo */
    padding-left: 17px; /* Ajuste no padding para compensar a borda */
  }

  .faq input[type="checkbox"]:checked + label .faq-text {
    opacity: 1; /* Torna o texto visível ao expandir */
  }

  /* Remove a barra de rolagem 
    display: none;
  }

  ::-webkit-scrollbar {*/

  @media (max-width: 768px) {
    .faq-heading {
      font-size: 12px;
      padding-right: 40px;
      padding-left:10px;
      text-indent: 0px;
    }

    .faq-text {
      font-size: 12px;
      padding-right: 50px;
    }
    
    .faq input[type='checkbox']:not(:checked) + label {
    height: 60px;/* Altura quando não checado */
  }
  }
  #showMore, #showLess {
      display: inline-block;
      margin: 20px auto;
      background-color: transparent;
      color: #041D5C;
      font-weight: 500;
      font-size: 18px;
      border: none;
      cursor: pointer;
      padding: 10px 20px;
      text-align: center;
      position: relative;
      left: 50%;
      transform: translateX(-50%);
      background-repeat: no-repeat;
      background-position: right 5px center;
      padding-right: 40px; /* Ajuste para não sobrepor o texto ao ícone */
  }

  /* Opcional: Adiciona um efeito ao passar o mouse para indicar interatividade */
  #showMore:hover, #showLess:hover {
      color: #4FBB9D;
      transition: background-color 0.3s;
  }

</style>



<script>
    document.addEventListener('DOMContentLoaded', function() {
    const showMoreBtn = document.getElementById('showMore');
    const showLessBtn = document.getElementById('showLess');
    const hiddenFaqItems = document.querySelectorAll('.faq-item-hide'); // Seleciona as perguntas ocultas

    // Mostrar mais perguntas
    showMoreBtn.addEventListener('click', function() {
        hiddenFaqItems.forEach(item => {
            item.style.display = 'block'; // Altera para 'block' para exibir
        });
        showMoreBtn.style.display = 'none'; // Esconde o botão "Ver mais"
        showLessBtn.style.display = 'inline'; // Mostra o botão "Ver menos"
    });

    // Esconder as perguntas
    showLessBtn.addEventListener('click', function() {
        hiddenFaqItems.forEach(item => {
            item.style.display = 'none'; // Esconde novamente
        });
        showLessBtn.style.display = 'none'; // Esconde o botão "Ver menos"
        showMoreBtn.style.display = 'inline'; // Mostra o botão "Ver mais"
    });
});

</script>