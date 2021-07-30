<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style type="text/css">
    body{
  color: black;
}
#more {display: none;}
#mores {display: none;}
.navbar{
  margin-left: 25px;
  margin-right: 25px;
}
aside {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  margin-top: 120px;
  overflow-x: hidden;
  padding-top: 20px;
}
section{
  margin: 25px;
}
  </style>
<body>

  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu Makanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

  <main>
    <aside aria-labelledby="sidebar-label">
    <div id="sidebar-label" hidden>Sidebar</div>
    <section>
      <h2>Recommended</h2>
      <ul>
        <li>
          <article>
            <h3><a href="artikel1.html">Artikel Nasi Goreng</a></h3>
            <p>Artikel yang membahas tentang pembuatan nasi goreng.</p>
          </article>
        </li>
        <li>
          <article>
            <h3><a href="artikel2.html">Artikel Jenis Nasi Goreng</a></h3>
            <p>Membahas secara mendalam tentang berbagai jenis nasi goreng.</p>
          </article>
        </li>
      </ul>
    </section>
  </aside>
    <article>
      <h1>Nasi Goreng</h1>
      <p>Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega. Biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya; seperti telur, ayam, dan kerupuk.<span id="dots">...</span><span id="more"> Nasi goreng Indonesia aromanya berbeda dengan nasi goreng dari negara asia lain, baunya lebih bersahaja dan berbau asap, hal ini karena nasi goreng di Indonesia diberi kecap manis atau kadang kala terasi, dan rasanya lebih kuat dan pedas dibanding nasi goreng cina. Nasi goreng biasanya dihidangkan dengan krupuk dan bawang goreng untuk memberikan rasa renyah.
      Bahan utama nasi goreng antara lain nasi yang telah masak, kecap manis, bubuk terasi (pasta udang), garam, bawang putih, bawang merah, cabe rawit, daun bawang, pala, kunyit, minyak sayur, bawang merah, gula, pasta jahe, dan irisan mentimun serta tomat untuk hiasan. Beberapa resep bisa menambahkan lada hitam, saus ikan, atau kaldu bubuk sebagai penambah bumbu dan rasa. Telur bisa dicampur menjadi nasi goreng atau digoreng secara terpisah, baik sebagai telur ceplok/telur mata sapi, atau telur dadar (omelet), dan juga telur rebus. Penambahan telur atau tidak biasanya merupakan pilihan, nasi goreng yang dihidangkan dengan telur goreng sering dinamakan nasi goreng spesial atau nasi goreng khusus yang diberi topping telur goreng. </p>
      <a href="artikel1.html" id="myBtn" class="btn btn-primary">Read more</a>
    </article>
    <article>
      <h2>Jenis Nasi Goreng</h2>
      <p>Nasi goreng kambing dimasak dengan campuran rempah, mulai dari kunyit, serai, hingga kapulaga. Biasanya daging kambing diiris tipis atau dipotong kotak yang dicampur bersama nasi goreng<span id="dots">...</span><span id="more"> 
       Nasi goreng babat dikenal berasal dari Semarang yang memadukan babat dengan bumbu spesial. Nah, babat yang digunakan pun biasanya empuk dan gak bau</p>
      <a href="artikel2.html" id="myBtn2" class="btn btn-primary">Read more</a>
    </article>
  </main>
  <footer>
    <ul>
      
    </ul>
  </footer>
  </body>
</html>