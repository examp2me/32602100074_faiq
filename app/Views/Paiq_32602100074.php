<?= $this->extend('layout/32602100074_Paiq') ?>
<?= $this->section('content') ?>

    <div class="about">
        <div class="about-us">
            <h1>About Us</h1>
            <p>An undergraduated student at the Faculty of INdustrial
                Technology, majoring in informatics Engineering from 
                the Islamic University of Sultan Agung Semarang</p>
        </div>
        <div class="about-experience">
            <h1>Experience</h1> 
            <div class="about-experience-list">
                <table border='1'>
                    <tr>
                        <th rowspan='3'>2020</th>
                        <th colspan='2'>Player PUBGM</th>
                        <th rowspan='3'>2021</th>
                        <th colspan='2'>Design Graphic</th>
                    </tr>    
                    <tr>
                        <td>Batam</td>
                        <td>Indonesia</td> 
                        <td>Batam</td>
                        <td>Indonesia</td>
                    </tr>
                    <tr>
                        <td colspan='2'>winning a National Tournament
                            Jawara Cup 2020</td>
                        <td colspan='2'>Join a mini project to make
                            a poster film</td>
                        </tr>
                </table>
            </div>
        </div>
    </div>

<style>
    .about{
        display: block;
        flex-direction: column;
        align-items: center;
    }

    .about-us, .about-experience{
        padding: 20px;
        text-align: center;
        background-color: #f2f2f2;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .about-us h1, .about-experience h1 {
        color: black;
        margin-bottom: 10px;
    }    

    .about-us p {
        padding: 15px;
    }

    .about-experience-list table {
        width: 100%;
        border-collapse: collapse;
    }

    .about-experience-list th, 
    .about-experience-list td{
        padding: 10px;
        border: 1px solid #433;
    }

    .about-experience-list th{
        text-align: center;
        font-weight: bold;
    }

    .about-experience-list td {
        text-align: left; 
        font-size: 10px;
    }

@media (min-width: 600px) {
    .about {
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
    }

    .about-us,
    .about-experience {
        flex: 1;
        margin: 0 10px;
    }

    .about-us p {
        font-size: 18px;
    }

    .about-experience-list td {
        font-size: 16px;
    }
}
    

</style>

    <?= $this->endSection() ?>