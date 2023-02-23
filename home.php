<style>
    .home{
        display:flex;
        justify-content:center;
        width:100%;
    }
    .kiri{
        width: 50%;
        height:600px;
        display:flex;
        flex-direction:column;
        padding:5%;
    }
    .kanan{
        width: 50%;
        display:flex;
        flex-direction:column;
        justify-content:center;
        padding:2%;
    }
    .top_movie_section{
        display:flex;
        justify-content:space-around;
    }
    .top_movie{
        border:1px solid white;
        width: 200px;
        height: 300px;
        border-radius:5%;
        background-color: rgba(255, 255, 255, .4);  
        backdrop-filter: blur(10px);
        text-align:center;
        padding:1%;
        display:flex;
        flex-direction:column;
        justify-content:space-between;
    }
    .home{
        display:flex;
        justify-content:center;
        width:100%;
    }
    .kiri{
        width: 50%;
        height:600px;
        display:flex;
        flex-direction:column;
        padding:5%;
    }
    .kanan{
        width: 50%;
        display:flex;
        flex-direction:column;
        justify-content:center;
        padding:2%;
    }
    .top_movie_section{
        display:flex;
        justify-content:space-around;
    }
    .top_movie{
        border:1px solid white;
        width: 200px;
        height: 300px;
        border-radius:5%;
        background-color: rgba(255, 255, 255, .4);  
        backdrop-filter: blur(10px);
        text-align:center;
        padding:1%;
        display:flex;
        flex-direction:column;
        justify-content:space-between;
    }
</style>
<div class="page">
    <div class="home">
        <div class="kiri">
            <p style="font-size:142px">IMDB API</p>
            <p style="font-size:24px">The IMDb-API is a web service for receiving movie, serial and cast information. APIs results is a JSON and includes items such as movie specifications, images, posters, trailers, ratings, Wikipedia page content and more.</p>
        </div>
        <div class="kanan">
            <img style="width:100%;border-radius:50px;" src="resource/background/pexels-tima-miroshnichenko-7991579.jpg" alt="">
        </div>
    </div>
    <div class="top_movie_section">
        <div class="top_movie">
            <h3>Top 250 Movies</h3>
            <a class="btn btn-primary" href="">More</a>
        </div>
        <div class="top_movie">
            <h3>Top 250 TVs</h3>
            <a class="btn btn-primary" href="">More</a>

        </div>
        <div class="top_movie">
            <h4>Most Popular Movies</h3>
            <a class="btn btn-primary" href="">More</a>

        </div>
        <div class="top_movie">
            <h3>Most Popular TVs</h3>
            <a class="btn btn-primary" href="">More</a>
        </div>
    </div>
</div>