<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanguinStats - Blood Supply Quantitative Research Group</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-image: url('SanguinStats.webp');
            background-size: cover;
            background-position: center;
            text-align: center;
            color: #fff;
            padding: 60px 20px;
        }
        header h1 {
            font-size: 2.5em;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 254);
            margin: 0;
        }
        header p {
            font-size: 1.2em;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 254);
            max-width: 800px;
            margin: 10px auto;
        }
        main {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        section {
            margin-bottom: 20px;
        }
        h2 {
            color: #9b1e1e;
            font-size: 1.8em;
            margin-bottom: 10px;
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
		.two-column-list {
            column-count: 2;
			column-gap:0;
			width: 50%; 
			padding: 40;
			margin:20;
        }
        .two-column-list li {
            padding: 0;
			margin: 0;
        }

	  ul.no-bullets {
		list-style-type: none;
		padding-left: 5; /* Optional: removes default left indentation */
	  }
</style>
</head>
<body>

<header>
    <h1>Welcome to SanguinStats</h1>
    <p>We are a collaborative group of statisticians, mathematicians and epidemiologists dedicated to quantitative research within the blood supply.</p>
</header>

<main>
    <section id="aim">
        <h2>Our Aim</h2>
        <p>SanguinStats is dedicated to advancing blood supply management through data analysis. Our group, comprised of experts in statistics, mathematics, and epidemiology from ten countries around the world, aims to improve blood supply operations by providing insights into various aspects of the blood supply chain.</p>
    </section>

    <section id="participants">
        <h2>Participants</h2>
        <p>Currently we have participants from:</p>
        <ul class="two-column-list">
            <li>Australia</li>
            <li>Belgium</li>
            <li>Canada</li>
            <li>Denmark</li>
            <li>Finland</li>
            <li>France</li>
            <li>New Zealand</li>
            <li>South Africa</li>
            <li>Spain</li>
            <li>The Netherlands</li>
            <li>United Kingdom</li>
        </ul>
    </section>

    <section id="ongoing-projects">
        <h2>Ongoing and Potential Future Projects</h2>
        <ul>
            <li>Investigating the potential reduction in on-site low-Hb donor deferrals by applying an alternative donor deferral strategy in different blood bank settings. We evaluate a donor deferral strategy similar to the one described in <a href="https://doi.org/10.1111/trf.17085">https://doi.org/10.1111/trf.17085</a> where it is argued that the majority of no-site low-Hb deferrals are in fact unwarrented. (Ongoing project)</li>
            <li>Predicting future donor recruitment requirements of blood operators by predicting the yield of the current donor population by modelling historical donor carreers (Foreseen in 2025)</li>
            <li>Evaluation of historical changes in Hb-levels in the general population (Potential future project)</li>
            <li>Predicting Hb-recovery after donation in repeat donors (Potential future project)</li>
        </ul>
    </section>

    <section id="publications">
        <h2>Past Projects and Publications</h2>
        <ul>
            <li>An evaluation of the performance of Machine Learning Hb-deferral prediction models trained in different blood bank settings, across all of these settings. This work was published in:</li>
			<ul class="no-bullets"><li><i>"Predicting haemoglobin deferral using machine learning models: Can we use the same prediction model across countries?"</i>. Meulenbeld A, Toivonen J, Vinkenoog M, Brits T, Swanevelder R, de Clippel D, ... & Arvas M. Vox Sanguinis, 2024 119(7):758–763. <a href="https://doi.org/10.1111/vox.13643">https://doi.org/10.1111/vox.13643</a>.</li>
			<li>The analysis code is freely available at <a href="https://github.com/FRCBS/Hb_predictor_container">https://github.com/FRCBS/Hb_predictor_container</a>.</li>
			<li></li>
			</ul>
            <li>An evaluation of the performance of various Machine Learning models in predicting donor Hb-deferral in different settings. This work was published in:</li>
            <ul class="no-bullets"><li><i>"An international comparison of haemoglobin deferral prediction models for blood banking"</i>. Vinkenoog M, Toivonen J, Brits T, de Clippel D, Compernolle V, Karki S, ... & Janssen MP. Vox Sanguinis, 2023 118(6):430-439. <a href="https://doi.org/10.1111/vox.13426">https://doi.org/10.1111/vox.13426</a></li>
			<li>Both the ready-to-use container image (<a href="https://hub.docker.com/r/toivoja/hb-predictor">https://hub.docker.com/r/toivoja/hb-predictor</a>) and its source code (<a href="https://github.com/FRCBS/Hb_predictor_container">https://github.com/FRCBS/Hb_predictor_container</a>) are freely available through Dockerhub and Github respectively.</li>
			</ul>
        </ul>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <p>If you are interested in our work and want to find out more about our group, please feel free to contact me or join our monthly meetings at any time! Please contact Mart Janssen at <a margin: 0; href="mailto:m.janssen@sanquin.nl">m.janssen@sanquin.nl</a>.</p>

    </section>
</main>

</body>
</html>
