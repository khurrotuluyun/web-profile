<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Portofolio Uyun</title>
    <!--my own style-->
    <link rel="stylesheet" href="styles/style.css" />

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="jumbotron">
        <h1>MY PERSONAL INFORMATION</h1>
      </div>
      <nav>
        <ul>
          <li><a href="#profile">PROFILE</a></li>
          <li>
            <a href="#experience">EXPERIENCE</a>
            <ul class="dropdown-menu">
              <li><a href="project.html">Project</a></li>
              <li><a href="volunteer.html">Volunteer</a></li>
            </ul>
          </li>
          <li><a href="#hobby">HOBBY</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <!-- Konten artikel -->
      <div id="content">
        <article id="profile" class="card">
          <h2 id="profile">PROFILE</h2>
          <img
            src="image/foto.jpg"
            alt="profil"
            class="featured-image"
          />
          <h3>KHURROTUL 'UYUN</h3>
          <h4>Undergraduate Informastion System</h4>
          <p>
            A 5th semester Information Systems student who is passionate and
            enthusiastic about developing skills in the field of information
            technology. I have expertise in systems analysis and database
            management. Looking forward to being involved in a challenging
            project to be able to apply my knowledge and learn from
            professionals in the information technology industry.
          </p>
        </article>

        <article id="experience" class="card">
          <h2 id="experience">EXPERIENCE</h2>
          <section>
            <h3>Project - SRS & DDS (Case Study SIPS)</h3>
            <img
              src="image/sips.png"
              alt="sips"
              class="featured-image"
            />
            <p>
              Developing software requirements specification and software design
              documentation up to the prototype stage using a case study of
              Sistem Informasi Penukaran Suvenir (SIPS)
              <a
                href="https://drive.google.com/drive/folders/1rZCbOaMM--dKViMFVp-xh_iypS1eIlo-"
                >Link Document</a
              >
            </p>
          </section>

          <section>
            <h3>Volunteer - Data Collector IGD RS Jakarta</h3>
            <img
              src="image/sertifikat.jpg"
              alt="dasboard"
              class="featured-image"
            />
            <p>
              Collaborating with the Ministry of Health of the Republic of
              Indonesia to provide the latest data on room availability at
              Jakarta hospitals and help update data from the hospital to a
              chatbot which will then be displayed on the Ministry of Health
              website.
            </p>
          </section>
        </article>

        <article id="hobby" class="card">
          <h2 id="hobby">HOBBY</h2>
          <h3>Gallery Photography</h3>

          <section>
            <img src="image/pic3.jpg" class="featured-image" />
          </section>
          <section>
            <img src="image/pic5.jpg" class="featured-image" />
          </section>
          <section>
            <img src="image/pic6.jpg" class="featured-image" />
          </section>
        </article>
      </div>

      <!-- Konten samping -->
      <aside>
        <article class="card">
          <header>
            <h2>CONTACT</h2>

            <figure>
              <img src="image/kontak.png" />
            </figure>
          </header>

          <section>
            <table>
              <tr>
                <th>Email</th>
                <td>khurrotuluyun@gmail.com</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>Sidoarjo, Jawa Timur</td>
              </tr>
              <tr>
                <th>Telepon</th>
                <td>(+62) 8950-6932-906</td>
              </tr>
            </table>
          </section>
        </article>
      </aside>
    </main>
    <footer>
      <p>Portfolio Uyun &#169; 2023, Dicoding Academy</p>
    </footer>

    <!-- JavaScript untuk mengatur dropdown -->
    <script>
      const menuLinks = document.querySelectorAll("nav .dropdown-menu li a");

      menuLinks.forEach((link) => {
        link.addEventListener("click", function () {
          const selectedSection = link.getAttribute("href");
          if (selectedSection) {
            window.location.href = selectedSection;
          }
        });
      });
    </script>
  </body>
</html>