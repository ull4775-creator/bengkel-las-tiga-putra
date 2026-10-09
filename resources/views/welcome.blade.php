<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Professional - Konstruksi Besi & Aluminium</title>

    <link rel="icon" type="image/png" href="/assets/images/logooo2.jp g">
    <link rel="shortcut icon" type="image/png" href="/assets/images/logooo2.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        :root { 
            --primary: #FF9800; 
            --primary-glow: rgba(255, 152, 0, 0.6);
            --dark: #050505; 
            --glass-bg: rgba(10, 10, 10, 0.65); /* Tingkat transparansi */
            --glass-border: rgba(255, 255, 255, 0.08);
            --text-light: #F0F0F0;
            --text-muted: #A0A0A0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
        
        body { 
            font-family: 'Roboto', sans-serif; 
            color: var(--text-light); 
            overflow-x: hidden; 
            perspective: 1200px;
            /* BACKGROUND LOGO FULL SCREEN */
            background: linear-gradient(to bottom, rgba(5,5,5,0.85), rgba(5,5,5,0.95)), url('/assets/images/logooo1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }

        h1, h2, h3, .brand-font { font-family: 'Oswald', sans-serif; text-transform: uppercase; letter-spacing: 1px; }

        /* --- SCROLL REVEAL --- */
        .reveal { opacity: 0; transform: translateY(50px); transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1); filter: blur(5px); }
        .reveal.active { opacity: 1; transform: translateY(0); filter: blur(0); }
        .reveal-delay-1 { transition-delay: 0.1s; }
        .reveal-delay-2 { transition-delay: 0.2s; }

        /* --- NAVBAR GLASS --- */
        .navbar { position: fixed; top: 0; width: 100%; z-index: 1000; padding: 15px 0; transition: 0.4s; background: rgba(5, 5, 5, 0.5); backdrop-filter: blur(15px); border-bottom: 1px solid var(--glass-border); }
        .navbar.scrolled { background: rgba(5, 5, 5, 0.85); padding: 10px 0; box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        .nav-flex { display: flex; justify-content: space-between; align-items: center; max-width: 1280px; margin: 0 auto; padding: 0 30px; }
        
        .logo { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .logo-img { height: 45px; width: auto; object-fit: contain; filter: drop-shadow(0 0 10px rgba(255,152,0,0.4)); transition: 0.3s; }
        .logo:hover .logo-img { transform: scale(1.05); }
        .logo-text { font-size: 1.4rem; font-weight: 700; color: white; letter-spacing: 1px; text-shadow: 0 2px 10px rgba(0,0,0,0.5); }
        .logo-text span { color: var(--primary); }
        
        .nav-menu { display: flex; gap: 32px; list-style: none; align-items: center; }
        .nav-menu a { color: var(--text-light); text-decoration: none; font-weight: 500; transition: 0.3s; font-size: 0.9rem; position: relative; padding: 5px 0; text-transform: uppercase; letter-spacing: 0.5px; }
        .nav-menu a::after { content:''; position:absolute; bottom:-2px; left:0; width:0; height:2px; background:var(--primary); transition:0.3s; box-shadow: 0 0 10px var(--primary); }
        .nav-menu a:hover::after, .nav-menu a.active::after { width: 100%; }
        .nav-menu a:hover { color: var(--primary); }
        
        .btn-nav { background: linear-gradient(135deg, var(--primary), #FFB74D); color: #000; padding: 10px 24px; border-radius: 6px; text-decoration: none; font-weight: 700; transition: 0.3s; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; box-shadow: 0 4px 15px rgba(255,152,0,0.3); display: inline-flex; align-items: center; gap: 8px; }
        .btn-nav:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(255,152,0,0.5); }
        
        .hamburger { display: none; cursor: pointer; flex-direction: column; gap: 6px; z-index: 1001; padding: 5px; }
        .hamburger span { width: 28px; height: 2.5px; background: #fff; transition: 0.3s; border-radius: 2px; }
        .hamburger.active span:nth-child(1) { transform: rotate(45deg) translate(6px, 6px); }
        .hamburger.active span:nth-child(2) { opacity: 0; }
        .hamburger.active span:nth-child(3) { transform: rotate(-45deg) translate(6px, -6px); }

        /* --- HERO SECTION --- */
        .hero-section { min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 140px 0 100px; position: relative; overflow: hidden; text-align: center; }
        .hero-content { max-width: 100%; width: 100%; display: flex; flex-direction: column; align-items: center; position: relative; z-index: 2; }
        
        .hero-badge { display: inline-block; background: rgba(255,152,0,0.15); border: 1px solid rgba(255,152,0,0.4); color: var(--primary); padding: 8px 24px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 40px; backdrop-filter: blur(10px); box-shadow: 0 0 20px rgba(255,152,0,0.1); }
        
        .running-text-wrapper { width: 100%; overflow: hidden; margin-bottom: 30px; mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); }
        .running-text-track { display: flex; width: max-content; animation: runText 25s linear infinite; }
        .running-text-item { font-size: clamp(3rem, 8vw, 6rem); font-weight: 700; color: transparent; -webkit-text-stroke: 2px rgba(255,255,255,0.2); white-space: nowrap; padding: 0 40px; }
        .running-text-item.filled { color: #fff; -webkit-text-stroke: 0; text-shadow: 0 0 30px rgba(255,152,0,0.4); }
        .running-text-item.highlight { color: var(--primary); -webkit-text-stroke: 0; text-shadow: 0 0 40px var(--primary-glow); }
        @keyframes runText { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

        .hero-desc { font-size: 1.15rem; color: var(--text-muted); margin-bottom: 40px; line-height: 1.8; max-width: 700px; margin-left: auto; margin-right: auto; padding: 0 20px; text-shadow: 0 2px 10px rgba(0,0,0,0.8); }
        
        .hero-buttons { display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 60px; justify-content: center; padding: 0 20px; }
        .btn-primary { background: var(--primary); color: #000; padding: 16px 36px; border-radius: 6px; text-decoration: none; display: inline-flex; align-items: center; gap: 12px; transition: 0.4s; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; border: 2px solid var(--primary); box-shadow: 0 0 30px rgba(255,152,0,0.3); position: relative; overflow: hidden; backdrop-filter: blur(5px); }
        .btn-primary::before { content:''; position:absolute; top:0; left:-100%; width:100%; height:100%; background:linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent); transition:0.5s; }
        .btn-primary:hover::before { left:100%; }
        .btn-primary:hover { background: transparent; color: var(--primary); transform: translateY(-4px); box-shadow: 0 10px 40px rgba(255,152,0,0.4); }
        
        .btn-outline { background: rgba(255,255,255,0.05); border: 2px solid rgba(255,255,255,0.2); color: white; padding: 16px 36px; border-radius: 6px; text-decoration: none; display: inline-flex; align-items: center; gap: 12px; transition: 0.4s; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; backdrop-filter: blur(10px); }
        .btn-outline:hover { border-color: var(--primary); color: var(--primary); background: rgba(255,152,0,0.1); transform: translateY(-4px); }
        
        .hero-stats { display: flex; gap: 30px; flex-wrap: wrap; justify-content: center; width: 100%; padding: 0 20px; }
        .stat-item { display: flex; align-items: center; gap: 16px; padding: 14px 24px; background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 12px; transition: 0.3s; backdrop-filter: blur(15px); min-width: 200px; justify-content: center; }
        .stat-item:hover { background: rgba(255,152,0,0.15); border-color: rgba(255,152,0,0.4); transform: translateY(-3px); }
        .stat-icon { width: 48px; height: 48px; background: rgba(255,152,0,0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary); font-size: 1.2rem; flex-shrink: 0; }
        .stat-text { font-size: 0.75rem; color: var(--text-muted); line-height: 1.4; text-align: left; }
        .stat-text strong { color: #fff; display: block; font-size: 0.9rem; font-weight: 700; }

        /* --- MARQUEE SERVICES --- */
        .marquee-section { background: rgba(10,10,10,0.8); border-top: 1px solid var(--glass-border); border-bottom: 1px solid var(--glass-border); padding: 16px 0; overflow: hidden; position: relative; backdrop-filter: blur(10px); }
        .marquee-track { display: flex; gap: 50px; animation: marquee 30s linear infinite; width: max-content; }
        .marquee-item { display: flex; align-items: center; gap: 12px; white-space: nowrap; color: var(--text-muted); font-size: 0.9rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
        .marquee-item i { color: var(--primary); font-size: 0.8rem; }
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

        /* --- CATALOG GLASS CARDS --- */
        .section { padding: 100px 0; position: relative; }
        .container { max-width: 1280px; margin: 0 auto; padding: 0 30px; }
        .section-header { text-align: center; margin-bottom: 60px; }
        .section-label { color: var(--primary); letter-spacing: 5px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; display: block; margin-bottom: 12px; }
        .section-title { font-size: clamp(2rem, 4vw, 2.8rem); margin-bottom: 16px; color: #fff; text-shadow: 0 5px 20px rgba(0,0,0,0.5); }
        .section-subtitle { color: var(--text-muted); font-size: 1rem; max-width: 650px; margin: 0 auto; line-height: 1.7; }

        .filter-tabs { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; margin-bottom: 50px; }
        .filter-tab { background: var(--glass-bg); border: 1px solid var(--glass-border); color: var(--text-muted); padding: 12px 28px; border-radius: 30px; cursor: pointer; font-size: 0.8rem; font-weight: 600; transition: 0.3s; text-transform: uppercase; letter-spacing: 1px; position: relative; overflow: hidden; backdrop-filter: blur(10px); }
        .filter-tab::before { content:''; position:absolute; inset:0; background:var(--primary); transform:scaleX(0); transition:0.3s; z-index:-1; }
        .filter-tab:hover::before, .filter-tab.active::before { transform:scaleX(1); }
        .filter-tab:hover, .filter-tab.active { color: #000; border-color: var(--primary); }

        .grid-catalog { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px; perspective: 1000px; }
        
        .card-tilt-wrapper { transform-style: preserve-3d; transition: transform 0.15s ease-out; will-change: transform; }
        
        .service-card { 
            background: var(--glass-bg); 
            border: 1px solid var(--glass-border); 
            border-radius: 16px; 
            overflow: hidden; 
            transition: 0.4s; 
            position: relative; 
            display: flex;
            flex-direction: column;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            backdrop-filter: blur(20px); /* Efek Kaca Buram Kuat */
            transform: translateZ(0);
            transform-style: flat; /* FIX: Agar konten dalam kartu tetap datar dan mudah diklik */
        }
        .service-card:hover { border-color: rgba(255,152,0,0.5); box-shadow: 0 25px 60px rgba(0,0,0,0.6), 0 0 30px rgba(255,152,0,0.15); }
        
        .service-card::after {
            content: ''; position: absolute; inset: -1px; border-radius: 16px; padding: 1px;
            background: linear-gradient(45deg, transparent, var(--primary), transparent);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor; mask-composite: exclude; opacity: 0; transition: 0.4s;
        }
        .service-card:hover::after { opacity: 1; }

        .card-img { height: 240px; position: relative; overflow: hidden; background: #0a0a0a; cursor: pointer; z-index: 1; }
        .slider-container { width: 100%; height: 100%; position: relative; }
        .slide-img { width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; opacity: 0; transition: opacity 1s ease-in-out, transform 10s ease; transform: scale(1); }
        .slide-img.active { opacity: 1; transform: scale(1.1); } 
        
        /* Hapus tombol panah, biarkan area gambar bisa diklik untuk geser manual */
        .slider-hint { position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background: rgba(0,0,0,0.6); padding: 4px 12px; border-radius: 20px; font-size: 0.6rem; color: #fff; opacity: 0; transition: 0.3s; pointer-events: none; backdrop-filter: blur(5px); }
        .card-img:hover .slider-hint { opacity: 1; }

        .badge-tag { position: absolute; top: 14px; left: 14px; background: var(--primary); color: #000; padding: 5px 14px; border-radius: 6px; font-size: 0.65rem; font-weight: 800; z-index: 6; text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 4px 15px rgba(255,152,0,0.3); }
        .badge-category { position: absolute; top: 14px; right: 14px; background: rgba(0,0,0,0.8); color: var(--text-muted); padding: 5px 12px; border-radius: 6px; font-size: 0.6rem; font-weight: 600; z-index: 6; text-transform: uppercase; letter-spacing: 1px; border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(8px); }
        
        .card-body { padding: 24px; flex: 1; display: flex; flex-direction: column; }
        .card-name { font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; color: #fff; }
        .card-desc { color: var(--text-muted); font-size: 0.85rem; margin-bottom: 16px; line-height: 1.7; flex: 1; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
        
        .card-specs-mini { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 18px; }
        .spec-mini { background: rgba(255,255,255,0.05); padding: 5px 12px; border-radius: 6px; font-size: 0.7rem; color: var(--text-muted); border: 1px solid rgba(255,255,255,0.05); transition: 0.3s; }
        .spec-mini:hover { background: rgba(255,152,0,0.1); color: var(--primary); border-color: rgba(255,152,0,0.3); }
        
        /* FIX TOMBOL WA AGAR BISA DIKLIK */
        .btn-wa-card { 
            width: 100%; 
            background: linear-gradient(135deg, #25D366, #128C7E); 
            color: white; 
            padding: 14px; 
            border-radius: 10px; 
            text-decoration: none; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            gap: 10px; 
            font-size: 0.8rem; 
            font-weight: 700; 
            transition: 0.3s; 
            text-transform: uppercase; 
            letter-spacing: 1px; 
            border: none; 
            cursor: pointer; 
            box-shadow: 0 4px 15px rgba(37,211,102,0.2); 
            position: relative; /* Penting untuk z-index */
            z-index: 20; /* Pastikan di atas layer lain */
            pointer-events: auto !important; /* Paksa bisa diklik */
            overflow: hidden; 
        }
        .btn-wa-card::before { content:''; position:absolute; top:0; left:-100%; width:100%; height:100%; background:linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition:0.5s; }
        .btn-wa-card:hover::before { left:100%; }
        .btn-wa-card:hover { transform: translateY(-3px); box-shadow: 0 8px 25px rgba(37,211,102,0.4); }

        /* --- FEATURES GLASS GRID --- */
        .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .feature-box { padding: 32px; background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; transition: 0.4s; position: relative; overflow: hidden; backdrop-filter: blur(20px); }
        .feature-box::before { content:''; position:absolute; top:0; left:0; width:100%; height:3px; background:var(--primary); transform:scaleX(0); transition:0.4s; transform-origin:left; }
        .feature-box:hover::before { transform:scaleX(1); }
        .feature-box:hover { border-color: rgba(255,152,0,0.4); transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.4); background: rgba(20, 20, 20, 0.8); }
        .feature-icon { width: 52px; height: 52px; background: rgba(255,152,0,0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; font-size: 1.3rem; color: var(--primary); transition: 0.4s; }
        .feature-box:hover .feature-icon { background: var(--primary); color: #000; transform: rotateY(360deg); }
        .feature-title { font-size: 1rem; margin-bottom: 10px; color: #fff; font-weight: 700; }
        .feature-text { color: var(--text-muted); font-size: 0.85rem; line-height: 1.7; }

        /* --- GALLERY --- */
        .gallery-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 20px; }
        .gallery-item { position: relative; border-radius: 16px; overflow: hidden; aspect-ratio: 4/3; background: #0a0a0a; cursor: pointer; border: 1px solid var(--glass-border); }
        .gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: 0.6s; }
        .gallery-item:hover img { transform: scale(1.1); filter: brightness(0.6); }
        .gallery-overlay { position: absolute; bottom: 0; left: 0; right: 0; padding: 20px; background: linear-gradient(transparent, rgba(0,0,0,0.9)); transform: translateY(20px); opacity: 0; transition: 0.4s; }
        .gallery-item:hover .gallery-overlay { transform: translateY(0); opacity: 1; }
        .gallery-tag { display: inline-block; background: var(--primary); color: #000; padding: 4px 12px; border-radius: 4px; font-size: 0.6rem; font-weight: 700; text-transform: uppercase; margin-bottom: 8px; }
        .gallery-title { color: #fff; font-size: 0.9rem; font-weight: 600; }

        /* --- CALCULATOR GLASS CARD --- */
        .calc-section { background: rgba(10,10,10,0.6); border-top: 1px solid var(--glass-border); border-bottom: 1px solid var(--glass-border); position: relative; backdrop-filter: blur(10px); }
        .calc-wrapper { max-width: 700px; margin: 0 auto; position: relative; z-index: 2; background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 20px; padding: 40px; backdrop-filter: blur(25px); box-shadow: 0 20px 50px rgba(0,0,0,0.5); }
        .calc-header-box { background:rgba(255,152,0,0.1); border:1px solid rgba(255,152,0,0.3); border-radius:12px; padding:20px 24px; margin-bottom:35px; display:flex; align-items:center; gap:16px; }
        .form-group { margin-bottom: 28px; }
        .form-label { display: block; color: var(--text-muted); font-size: 0.78rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 12px; font-weight: 700; }
        .form-control { width: 100%; background: rgba(0,0,0,0.4); border: 1px solid var(--glass-border); color: white; padding: 16px 18px; border-radius: 10px; font-size: 0.95rem; font-family: 'Roboto', sans-serif; transition: 0.3s; backdrop-filter: blur(5px); }
        .form-control:focus { outline: none; border-color: var(--primary); background: rgba(0,0,0,0.6); box-shadow: 0 0 20px rgba(255,152,0,0.15); }
        .row-calc { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
        
        .calc-result-box { background: linear-gradient(135deg, rgba(255,152,0,0.15), rgba(0,0,0,0.4)); border: 1px solid rgba(255,152,0,0.3); border-radius: 12px; padding: 24px; text-align: center; margin-bottom: 28px; position: relative; overflow: hidden; }
        .calc-result-label { color: var(--text-muted); font-size: 0.78rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 8px; }
        .calc-result-value { color: var(--primary); font-size: 3rem; font-weight: 700; font-family: 'Oswald', sans-serif; text-shadow: 0 0 30px rgba(255,152,0,0.3); }
        
        .btn-submit-calc { width: 100%; background: linear-gradient(135deg, #25D366, #128C7E); color: white; border: none; padding: 18px; border-radius: 10px; font-size: 1rem; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 12px; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s; box-shadow: 0 8px 25px rgba(37,211,102,0.3); position: relative; overflow: hidden; }
        .btn-submit-calc::before { content:''; position:absolute; top:0; left:-100%; width:100%; height:100%; background:linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition:0.5s; }
        .btn-submit-calc:hover::before { left:100%; }
        .btn-submit-calc:hover { transform: translateY(-3px); box-shadow: 0 12px 35px rgba(37,211,102,0.4); }

        /* --- LOCATION --- */
        .location-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start; }
        .map-container { position: relative; border-radius: 16px; overflow: hidden; height: 450px; border: 1px solid var(--glass-border); box-shadow: 0 20px 50px rgba(0,0,0,0.5); }
        .map-container iframe { width:100%; height:100%; border:0; filter: grayscale(100%) invert(90%) contrast(1.2); transition: 0.4s; }
        .map-container:hover iframe { filter: grayscale(0%) invert(0%) contrast(1); }
        .map-overlay { position: absolute; inset: 0; background: rgba(0,0,0,0.6); display: flex; align-items: center; justify-content: center; transition: 0.4s; backdrop-filter: blur(3px); }
        .map-container:hover .map-overlay { background: rgba(0,0,0,0.2); backdrop-filter: blur(0); }
        .btn-map { background: var(--primary); color: #000; padding: 16px 32px; border-radius: 6px; font-weight: 700; text-decoration: none; display: flex; align-items: center; gap: 12px; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; box-shadow: 0 0 30px rgba(255,152,0,0.3); transition: 0.3s; }
        .btn-map:hover { transform: scale(1.05); box-shadow: 0 0 40px rgba(255,152,0,0.5); }
        
        .location-info { display: flex; flex-direction: column; gap: 24px; }
        .info-block { padding: 26px; background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; transition: 0.3s; backdrop-filter: blur(20px); }
        .info-block:hover { border-color: rgba(255,152,0,0.4); transform: translateX(5px); }
        .info-label { color: var(--primary); font-size: 0.72rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin-bottom: 10px; }
        .info-value { color: #fff; font-size: 0.95rem; line-height: 1.7; }
        .info-value.muted { color: var(--text-muted); font-size: 0.85rem; }
        
        .area-tags { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 14px; }
        .area-tag { background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; font-size: 0.75rem; color: var(--text-muted); border: 1px solid rgba(255,255,255,0.08); transition: 0.3s; }
        .area-tag:hover { background: rgba(255,152,0,0.15); color: var(--primary); border-color: rgba(255,152,0,0.4); }

        /* --- FOOTER --- */
        footer { background: rgba(0,0,0,0.8); padding: 50px 0; text-align: center; border-top: 1px solid var(--glass-border); backdrop-filter: blur(10px); }
        .footer-logo { color: var(--primary); margin-bottom: 16px; font-size: 1.4rem; font-weight: 700; display: flex; align-items: center; justify-content: center; gap: 12px; }
        .footer-copy { color: #555; font-size: 0.8rem; }

        .floating-wa { position:fixed; bottom:30px; right:30px; width:60px; height:60px; background:#25D366; border-radius:50%; display:flex; align-items:center; justify-content:center; color:white; font-size:1.8rem; box-shadow:0 8px 30px rgba(37,211,102,0.4); z-index:999; text-decoration:none; transition: 0.3s; animation: pulseWa 2s infinite; }
        .floating-wa:hover { transform: scale(1.15) rotate(10deg); box-shadow:0 12px 40px rgba(37,211,102,0.6); }
        @keyframes pulseWa { 0%{box-shadow:0 0 0 0 rgba(37,211,102,0.7)} 70%{box-shadow:0 0 0 20px rgba(37,211,102,0)} 100%{box-shadow:0 0 0 0 rgba(37,211,102,0)} }

        /* Modal Glass */
        .modal-overlay { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.9); z-index: 2000; align-items: center; justify-content: center; padding: 20px; backdrop-filter: blur(15px); }
        .modal-overlay.active { display: flex; animation: fadeIn 0.4s ease; }
        .modal-content { background: var(--glass-bg); border-radius: 16px; max-width: 650px; width: 100%; position: relative; border: 1px solid var(--glass-border); overflow: hidden; max-height: 90vh; overflow-y: auto; box-shadow: 0 0 60px rgba(255,152,0,0.15); backdrop-filter: blur(30px); }
        .modal-close { position: absolute; top: 16px; right: 16px; background: rgba(0,0,0,0.7); border: 1px solid rgba(255,255,255,0.1); color: white; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center; transition: 0.3s; }
        .modal-close:hover { background: var(--primary); color: #000; transform: rotate(90deg); }
        .modal-slider { height: 300px; background: #000; position: relative; }
        .modal-slider img { width: 100%; height: 100%; object-fit: cover; }
        .slider-nav { position: absolute; top: 50%; transform: translateY(-50%); background: rgba(0,0,0,0.7); border: 1px solid rgba(255,255,255,0.1); color: white; width: 42px; height: 42px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: 0.3s; }
        .slider-nav:hover { background: var(--primary); color: #000; }
        .slider-prev { left: 16px; } .slider-next { right: 16px; }
        .modal-body { padding: 28px; }
        .modal-specs { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin: 24px 0; }
        .spec-item { background: rgba(255,255,255,0.03); padding: 14px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); transition: 0.3s; }
        .spec-item:hover { background: rgba(255,152,0,0.1); border-color: rgba(255,152,0,0.3); }
        .spec-label { font-size: 0.68rem; color: var(--primary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 6px; font-weight: 700; }
        .spec-value { font-size: 0.9rem; color: #fff; }
        .includes-list { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 14px; }
        .include-tag { background: rgba(255,152,0,0.1); border: 1px solid rgba(255,152,0,0.3); color: var(--primary); padding: 8px 14px; border-radius: 6px; font-size: 0.75rem; transition: 0.3s; }
        .include-tag:hover { background: var(--primary); color: #000; }
        .modal-book-btn { width: 100%; padding: 18px; background: linear-gradient(135deg, #25D366, #128C7E); color: white; border: none; border-radius: 10px; font-size: 1rem; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 12px; margin-top: 28px; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s; box-shadow: 0 8px 25px rgba(37,211,102,0.3); }
        .modal-book-btn:hover { transform: translateY(-3px); box-shadow: 0 12px 35px rgba(37,211,102,0.4); }

        @keyframes fadeIn { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }

        /* --- RESPONSIVE --- */
        @media(max-width: 1024px) {
            .features-grid { grid-template-columns: repeat(2, 1fr); }
            .location-grid { grid-template-columns: 1fr; }
        }
        @media(max-width: 768px) {
            .nav-menu { position: fixed; top: 0; right: -100%; width: 80%; height: 100vh; background: rgba(5,5,5,0.95); flex-direction: column; padding: 100px 40px; transition: 0.4s; z-index: 999; border-left: 1px solid var(--glass-border); backdrop-filter: blur(20px); align-items: flex-start; gap: 24px; }
            .nav-menu.active { right: 0; }
            .hamburger { display: flex; }
            .btn-nav { display: none; }
            .grid-catalog { grid-template-columns: 1fr !important; }
            .features-grid { grid-template-columns: 1fr; }
            .modal-specs { grid-template-columns: 1fr; }
            .running-text-item { font-size: 2.5rem; padding: 0 20px; }
            .section-title { font-size: 1.8rem; }
            .row-calc { grid-template-columns: 1fr; }
            .hero-section { padding: 120px 0 80px; }
            .hero-stats { gap: 16px; }
            .stat-item { padding: 10px 16px; min-width: auto; width: 100%; }
            .stat-icon { width: 40px; height: 40px; font-size: 1rem; }
            .filter-tabs { gap: 8px; }
            .filter-tab { padding: 10px 18px; font-size: 0.72rem; }
            .map-container { height: 300px; }
            .gallery-grid { grid-template-columns: repeat(2, 1fr); }
            .calc-wrapper { padding: 25px 20px; }
        }
        @media(max-width: 480px) {
            .hero-buttons { flex-direction: column; align-items: stretch; }
            .btn-primary, .btn-outline { justify-content: center; }
            .hero-stats { flex-direction: column; align-items: center; gap: 12px; }
            .stat-item { width: 100%; justify-content: flex-start; }
            .gallery-grid { grid-template-columns: 1fr; }
            .section { padding: 70px 0; }
            .container { padding: 0 20px; }
            .logo-text { font-size: 1.1rem; }
            .logo-img { height: 32px; }
            .running-text-item { font-size: 1.8rem; -webkit-text-stroke: 1px rgba(255,255,255,0.3); }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-flex">
            <a href="#" class="logo">
                <img src="/assets/images/logooo2.jpg" alt="Bengkel Las Pro Logo" class="logo-img" onerror="this.style.display='none'">
                <div class="logo-text">BENGKEL LAS <span>PRO</span></div>
            </a>
            
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#katalog">Katalog</a></li>
                <li><a href="#keunggulan">Keunggulan</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#kalkulator">Estimasi</a></li>
                <li><a href="#lokasi">Lokasi</a></li>
            </ul>
            
            <!-- GANTI NOMOR WHATSAPP DI SINI (Tombol Navbar) -->
            <a href="https://wa.me/6281324481252" target="_blank" class="btn-nav"><i class="fab fa-whatsapp"></i> Chat WA</a>
            <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-content">
            <div class="hero-text reveal">
                <span class="hero-badge">Melayani Area Sekitar</span>
                
                <div class="running-text-wrapper">
                    <div class="running-text-track">
                        <span class="running-text-item filled">KUALITAS KUAT,</span>
                        <span class="running-text-item">HASIL PRESISI.</span>
                        <span class="running-text-item highlight">LAS LISTRIK PROFESSIONAL</span>
                        
                        <span class="running-text-item filled">KUALITAS KUAT,</span>
                        <span class="running-text-item">HASIL PRESISI.</span>
                        <span class="running-text-item highlight">LAS LISTRIK PROFESSIONAL</span>
                    </div>
                </div>
                
                <p class="hero-desc">Pengerjaan besi custom — pagar, kanopi, teralis, tangga, hingga rolling door — dengan material SNI tebal, las matang digerinda rapi, dan tukang berpengalaman 15+ tahun. Survey & konsultasi gratis.</p>
                <div class="hero-buttons">
                    <a href="#katalog" class="btn-primary"><i class="fas fa-th-large"></i> Jelajahi Katalog</a>
                    <!-- GANTI NOMOR WHATSAPP DI SINI (Tombol Hero) -->
                    <a href="https://wa.me/6281324481252" target="_blank" class="btn-outline"><i class="fab fa-whatsapp"></i> Chat WhatsApp Sekarang</a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item reveal reveal-delay-1">
                        <div class="stat-icon"><i class="fas fa-medal"></i></div>
                        <div class="stat-text"><strong>100% Besi SNI</strong>Tebal Sesuai Spesifikasi</div>
                    </div>
                    <div class="stat-item reveal reveal-delay-2">
                        <div class="stat-icon"><i class="fas fa-users"></i></div>
                        <div class="stat-text"><strong>15+ Tahun</strong>Pengalaman</div>
                    </div>
                    <div class="stat-item reveal reveal-delay-1">
                        <div class="stat-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="stat-text"><strong>Garansi</strong>Rapi & Awet</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Running Text Services -->
    <div class="marquee-section">
        <div class="marquee-track">
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Pagar Rumah</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Kanopi Alderon</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Teralis Jendela</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Railing Tangga</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Rolling Door</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Dudukan Toren</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Meja Kursi Besi</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Pintu Gerbang</span>
            <!-- Duplikat -->
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Pagar Rumah</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Kanopi Alderon</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Teralis Jendela</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Railing Tangga</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Rolling Door</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Dudukan Toren</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Meja Kursi Besi</span>
            <span class="marquee-item"><i class="fas fa-check-circle"></i> Pintu Gerbang</span>
        </div>
    </div>

    <!-- Catalog Section -->
    <section class="section" id="katalog">
        <div class="container">
            <div class="section-header reveal">
                <!-- <span class="section-label">Katalog Produk Las Custom</span> -->
                <h2 class="section-title">Katalog Produk Las Custom</h2>
                <p class="section-subtitle">Semua produk dikerjakan custom sesuai ukuran & model yang Anda mau. Klik produk untuk detail, atau langsung chat — pesan WhatsApp terisi otomatis.</p>
            </div>

            <!-- <div class="filter-tabs reveal">
                <button class="filter-tab active" data-filter="all">Semua</button>
                <button class="filter-tab" data-filter="fasad">Fasad & Pagar</button>
                <button class="filter-tab" data-filter="interior">Interior & Tangga</button>
                <button class="filter-tab" data-filter="kanopi">Kanopi & Konstruksi</button>
                <button class="filter-tab" data-filter="keamanan">Keamanan & Komersial</button>
            </div> -->
            
            <div class="grid-catalog">
                @foreach($products as $product)
                    @if(!is_array($product)) @continue @endif
                    @php 
                        $images = is_array($product['images']) ? $product['images'] : ['placeholder.jpg'];
                        // Path gambar disesuaikan dengan folder assets/images
                        $safeImages = array_map(function($img) { return '/assets/images/' . strtolower(str_replace('&', '', $img)); }, $images);
                        
                        $category = 'fasad';
                        $catName = 'Fasad & Pagar';
                        if(in_array($product['name'], ['Railing / Pegangan Tangga', 'Tangga Besi', 'Meja & Kursi Besi'])) { $category = 'interior'; $catName = 'Interior & Tangga'; }
                        elseif(in_array($product['name'], ['Kanopi Garasi / Carport', 'Dudukan Toren Air', 'Konstruksi Baja WF'])) { $category = 'kanopi'; $catName = 'Kanopi & Konstruksi'; }
                        elseif(in_array($product['name'], ['Teralis Jendela', 'Pintu Rolling Door', 'Tralis Paket'])) { $category = 'keamanan'; $catName = 'Keamanan & Komersial'; }

                        $safeProduct = [
                            'id' => $product['id'] ?? 0, 'name' => $product['name'] ?? 'Produk',
                            'price' => $product['price'] ?? '-', 'description' => $product['description'] ?? '',
                            'images' => $safeImages,
                            'specs' => is_array($product['specs']) ? $product['specs'] : [],
                            'includes' => is_array($product['includes']) ? $product['includes'] : [],
                            'is_best_seller' => $product['is_best_seller'] ?? false
                        ];
                        
                        // GANTI NOMOR WHATSAPP DI SINI (Tombol Kartu Produk)
                        $waNumber = '6281324481252'; 
                        $waText = rawurlencode("Halo Admin Bengkel Las, saya ingin bertanya tentang " . ($product['name'] ?? '') . ". Apakah bisa dibuat custom?");
                        $miniSpecs = array_slice(is_array($product['specs']) ? $product['specs'] : [], 0, 2);
                    @endphp
                    
                    <div class="card-tilt-wrapper reveal" data-tilt data-category="{{ $category }}">
                        <div class="service-card">
                            <div class="card-img" onclick="moveSlide('{{ $product['id'] }}', 1)">
                                @if(!empty($product['is_best_seller'])) <span class="badge-tag"><i class="fas fa-star"></i> Populer</span> @endif
                                <span class="badge-category">{{ $catName }}</span>
                                
                                <div class="slider-container" id="slider-{{ $product['id'] }}" data-auto-slide="true">
                                    @foreach($safeImages as $index => $imgUrl)
                                        <img src="{{ $imgUrl }}" class="slide-img {{ $index === 0 ? 'active' : '' }}" alt="{{ $product['name'] }}" loading="lazy" onerror="this.onerror=null; this.src='/assets/images/placeholder.jpg';">
                                    @endforeach
                                </div>
                                <div class="slider-hint"><i class="fas fa-hand-pointer"></i> Klik untuk geser</div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-name">{{ $product['name'] ?? 'Nama Layanan' }}</h3>
                                <p class="card-desc">{{ Str::limit($product['description'] ?? '', 100) }}</p>
                                <div class="card-specs-mini">
                                    @foreach($miniSpecs as $specKey => $specVal)
                                        <span class="spec-mini">{{ $specVal }}</span>
                                    @endforeach
                                </div>
                                <a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}" target="_blank" class="btn-wa-card"><i class="fab fa-whatsapp"></i> Tanya Harga via WA</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <!-- <section class="section" id="keunggulan">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-label">Kenapa Memilih Kami</span>
                <h2 class="section-title">Dikerjakan Seperti Untuk Rumah Sendiri</h2>
            </div>
            <div class="features-grid reveal">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-medal"></i></div>
                    <h3 class="feature-title">Material Besi SNI Asli</h3>
                    <p class="feature-text">Tidak pakai besi banci/tipis. Ketebalan sesuai kesepakatan, boleh dicek saat survey.</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-fire"></i></div>
                    <h3 class="feature-title">Las Matang, Gerinda Rapi</h3>
                    <p class="feature-text">Sambungan full penetration lalu digerinda halus — kuat di dalam, mulus di luar.</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-paint-roller"></i></div>
                    <h3 class="feature-title">Cat Anti-Karat Epoxy</h3>
                    <p class="feature-text">Dasar epoxy zinc chromate sebelum finishing, tahan hujan-panas bertahun-tahun.</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-search-location"></i></div>
                    <h3 class="feature-title">Gratis Survey Lokasi</h3>
                    <p class="feature-text">Kami datang, ukur di lokasi, dan bantu pilihkan model yang pas untuk rumah Anda.</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-receipt"></i></div>
                    <h3 class="feature-title">Harga Transparan</h3>
                    <p class="feature-text">Rincian material & upah jelas di awal. Tanpa biaya tersembunyi di tengah jalan.</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="feature-title">Garansi Pengerjaan</h3>
                    <p class="feature-text">Ada masalah setelah pemasangan? Kami perbaiki. Perawatan ringan juga dibantu.</p>
                </div>
            </div>
        </div>
    </section> -->

        <!-- Gallery Section -->
        <!-- Gallery Section -->
    <section class="section" id="galeri" style="background: rgba(0,0,0,0.3);">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-label">Galeri Hasil Kerja</span>
                <h2 class="section-title">Dari Percikan Api, Jadi Karya Presisi</h2>
                <p class="section-subtitle">Dokumentasi proses workshop dan hasil pemasangan di rumah & usaha pelanggan.</p>
            </div>
            <div class="gallery-grid reveal">
                <!-- Produk 1: Pagar & Gerbang (ID 1) -->
                <div class="gallery-item">
                    <img src="/assets/images/1.jpg" alt="Pagar Besi Minimalis" onerror="this.src='/assets/images/placeholder.jpg'">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Fasad & Pagar</span>
                        <div class="gallery-title">Pagar Besi Minimalis Modern</div>
                    </div>
                </div>
                
                <!-- Produk 2: Kanopi Membran (ID 2) -->
                <div class="gallery-item">
                    <img src="/assets/images/1%20(1).jpg" alt="Kanopi Membran Tensile" onerror="this.src='/assets/images/placeholder.jpg'">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Kanopi</span>
                        <div class="gallery-title">Kanopi Membran Tensile Mewah</div>
                    </div>
                </div>
                
                <!-- Produk 3: Pintu Henderson (ID 3) -->
                <div class="gallery-item">
                    <img src="/assets/images/3%20(1).jpg" alt="Pintu Sliding Henderson" onerror="this.src='/assets/images/placeholder.jpg'">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Interior</span>
                        <div class="gallery-title">Pintu Sliding Henderson Premium</div>
                    </div>
                </div>
                
                <!-- Produk 4: Kusen Aluminium (ID 4) -->
                <div class="gallery-item">
                    <img src="/assets/images/4%20(1).jpg" alt="Kusen Aluminium All Glass" onerror="this.src='/assets/images/placeholder.jpg'">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Kusen</span>
                        <div class="gallery-title">Kusen Aluminium Presisi YKK</div>
                    </div>
                </div>
                
                <!-- Produk 5: Konstruksi Baja WF (ID 5) -->
                <div class="gallery-item">
                    <img src="/assets/images/5%20(1).jpg" alt="Konstruksi Baja WF" onerror="this.src='/assets/images/placeholder.jpg'">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Konstruksi</span>
                        <div class="gallery-title">Rangka Atap Baja WF Kokoh</div>
                    </div>
                </div>
                
                <!-- Produk 6: Rolling Door & Tangga (ID 7) - Diambil dari ID 7 karena lebih relevan -->
                <div class="gallery-item">
                    <img src="/assets/images/6%20(1).jpg" alt="Rolling Door & Tangga" onerror="this.src='/assets/images/placeholder.jpg'">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Aksesoris</span>
                        <div class="gallery-title">Rolling Door Toko & Tangga Besi</div>
                    </div>
                </div>

                <!-- Produk 7: Kanopi Kaca/Alderon (ID 6) -->
                <div class="gallery-item">
                    <img src="/assets/images/7%20(1).jpg" alt="Kanopi Kaca Tempered" onerror="this.src='/assets/images/placeholder.jpg'">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Kanopi</span>
                        <div class="gallery-title">Kanopi Kaca Tempered Transparan</div>
                    </div>
                </div>

                <!-- Produk 8: Teralis Pintu & Jendela (ID 8) -->
                <div class="gallery-item">
                    <img src="/assets/images/77%20(1).jpg" alt="Teralis Pengaman" onerror="this.src='/assets/images/placeholder.jpg'">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Keamanan</span>
                        <div class="gallery-title">Teralis Jendela Motif Klasik</div>
                    </div>
                </div>

                <!-- Produk 9: Rangka Atap Baja Ringan (ID 9) -->
                <div class="gallery-item">
                    <img src="/assets/images/33%20(1).jpg" alt="Rangka Baja Ringan" onerror="this.src='/assets/images/placeholder.jpg'">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Atap</span>
                        <div class="gallery-title">Pemasangan Rangka Baja Ringan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calculator Section -->
    <section class="section calc-section" id="kalkulator">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-label">Simulasi Kebutuhan</span>
                <h2 class="section-title">Hitung Dulu, Kirim Langsung ke WA</h2>
                <p class="section-subtitle">Isi perkiraan ukuran pagar, kanopi, atau teralis Anda. Ringkasannya otomatis tersusun rapi di chat WhatsApp — admin kami balas dengan estimasi harga & jadwal survey gratis.</p>
            </div>
            
            <div class="calc-wrapper reveal">
                <div class="calc-header-box">
                    <i class="fas fa-calculator" style="color:var(--primary); font-size:1.4rem;"></i>
                    <div>
                        <div style="font-weight:700; color:#fff; font-size:1rem;">Kalkulator Estimasi</div>
                        <div style="color:var(--text-muted); font-size:0.8rem;">Harga final ditentukan setelah survey & pengukuran langsung — gratis untuk seluruh area.</div>
                    </div>
                </div>

                <form id="estimationForm" onsubmit="sendToWhatsApp(event)">
                    <div class="form-group">
                        <label class="form-label">Jenis Produk</label>
                        <select id="calcProduct" class="form-control" required>
                            <option value="" disabled selected>Pilih jenis pekerjaan...</option>
                            <option value="Pagar / Gerbang Besi">Pagar Rumah</option>
                            <option value="Kanopi Membran">Kanopi</option>
                            <option value="Teralis Pintu / Jendela">Teralis Jendela</option>
                            <option value="Rolling Door / Tangga / Balkon">Railing Tangga</option>
                        </select>
                    </div>

                    <div class="row-calc">
                        <div class="form-group">
                            <label class="form-label">Panjang (meter)</label>
                            <input type="number" id="calcLength" class="form-control" placeholder="mis. 4" step="0.1" min="0" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tinggi (meter)</label>
                            <input type="number" id="calcHeight" class="form-control" placeholder="mis. 1.5" step="0.1" min="0" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tipe Material</label>
                        <select id="calcMaterial" class="form-control" required>
                            <option value="" disabled selected>Pilih tipe material...</option>
                            <option value="Standard Galvanis">Standard Galvanis</option>
                            <option value="Premium Hollow tebal">Premium Hollow</option>
                            <option value="Besi Tempa Klasik">Tempa Klasik</option>
                        </select>
                    </div>

                    <div class="calc-result-box">
                        <div class="calc-result-label">Perkiraan Luas</div>
                        <div class="calc-result-value" id="resultArea">— m²</div>
                    </div>

                    <button type="submit" class="btn-submit-calc">
                        <i class="fab fa-whatsapp"></i> Kirim Estimasi ke WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="section" id="lokasi">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-label">Lokasi & Jam Operasional</span>
                <h2 class="section-title">Workshop Kami</h2>
            </div>
            <div class="location-grid reveal">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31735.58888888889!2d107.62!3d-6.79!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e688c0c0c0c0c0c%3A0x0!2zNsKwNDcnMDAuMCJTIDEwN8KwMzcnMDAuMCJF!5e0!3m2!1sid!2sid!4v1700000000000" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="map-overlay">
                        <a href="https://maps.app.goo.gl/Pvixba29j8ADjDdo9" target="_blank" class="btn-map"><i class="fas fa-location-arrow"></i> Buka Google Maps</a>
                    </div>
                </div>
                
                <div class="location-info">
                    <div class="info-block">
                        <div class="info-label">Alamat Workshop</div>
                        <div class="info-value">Jl. Raya Utama — Jalur Lingkar Selatan, Jawa Barat</div>
                    </div>
                    <div class="info-block">
                        <div class="info-label">Jam Operasional</div>
                        <div class="info-value">Senin – Sabtu: 08.00 – 17.00 WIB<br><span class="muted">Minggu & tanggal merah: konsultasi chat tetap aktif</span></div>
                    </div>
                    <div class="info-block">
                        <div class="info-label">Jangkauan Layanan</div>
                        <div class="area-tags">
                            <span class="area-tag">Kota Utama</span>
                            <span class="area-tag">Cisaat</span>
                            <span class="area-tag">Cibadak</span>
                            <span class="area-tag">Sukaraja</span>
                            <span class="area-tag">Baros</span>
                            <span class="area-tag">Gunungpuyuh</span>
                            <span class="area-tag">Cikole</span>
                            <span class="area-tag">Warudoyong</span>
                        </div>
                    </div>
                    <div style="display:flex; gap:14px; flex-wrap:wrap;">
                        <!-- GANTI NOMOR WHATSAPP DI SINI (Tombol Lokasi) -->
                        <a href="https://wa.me/6281324481252" target="_blank" class="btn-primary" style="flex:1; justify-content:center;"><i class="fab fa-whatsapp"></i> Chat WhatsApp</a>
                        <a href="https://maps.app.goo.gl/Pvixba29j8ADjDdo9" target="_blank" class="btn-outline" style="flex:1; justify-content:center;"><i class="fas fa-map-marker-alt"></i> Buka Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-logo"><i class="fas fa-fire-burner"></i> Bengkel Las Pro</div>
            <p class="footer-copy">&copy; 2024 Bengkel Las Professional. All rights reserved.</p>
        </div>
    </footer>

    <!-- Floating WA -->
    <!-- GANTI NOMOR WHATSAPP DI SINI (Floating Button) -->
    <a href="https://wa.me/6281324481252" target="_blank" class="floating-wa"><i class="fab fa-whatsapp"></i></a>

    <!-- Product Modal -->
    <div class="modal-overlay" id="productModal">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button onclick="closeModal()" class="modal-close"><i class="fas fa-times"></i></button>
            <div class="modal-slider" id="modalSlider">
                <img id="modalMainImg" src="" alt="Product">
                <button onclick="changeModalSlide(-1)" class="slider-nav slider-prev"><i class="fas fa-chevron-left"></i></button>
                <button onclick="changeModalSlide(1)" class="slider-nav slider-next"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="modal-body">
                <h2 id="modalName" style="font-size:1.4rem; margin-bottom:10px; color:#fff;"></h2>
                <div style="font-size:1.3rem; color:var(--primary); font-weight:700; margin-bottom:18px;" id="modalPrice"></div>
                <p id="modalDesc" style="color:var(--text-muted); line-height:1.8; margin-bottom:24px;"></p>
                
                <h4 style="font-size:0.78rem; color:var(--primary); margin-bottom:14px; text-transform:uppercase; letter-spacing:2px;"><i class="fas fa-cog"></i> Spesifikasi Teknis:</h4>
                <div class="modal-specs" id="modalSpecs"></div>
                
                <h4 style="font-size:0.78rem; color:var(--primary); margin-bottom:14px; text-transform:uppercase; letter-spacing:2px;"><i class="fas fa-check-circle"></i> Termasuk Dalam Paket:</h4>
                <div class="includes-list" id="includesList"></div>
                
                <!-- GANTI NOMOR WHATSAPP DI SINI (Modal Booking) -->
                <a id="modalBookBtn" href="https://wa.me/6281324481252" target="_blank" class="modal-book-btn"><i class="fab fa-whatsapp"></i> Konsultasi & Booking</a>
            </div>
        </div>
    </div>

    <script>
        // --- 1. NAVBAR & MOBILE MENU ---
        window.addEventListener('scroll', () => document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 50));
        const hamburger = document.getElementById('hamburger'), navMenu = document.getElementById('navMenu');
        hamburger.addEventListener('click', () => { hamburger.classList.toggle('active'); navMenu.classList.toggle('active'); });
        document.querySelectorAll('.nav-menu a').forEach(link => { link.addEventListener('click', () => { hamburger.classList.remove('active'); navMenu.classList.remove('active'); }); });

        // --- 2. FILTER TABS ---
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                const filter = tab.dataset.filter;
                document.querySelectorAll('.card-tilt-wrapper').forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // --- 3. SAFE 3D TILT EFFECT LOGIC (FIXED CLICK ISSUE) ---
        const tiltElements = document.querySelectorAll('[data-tilt]');

        tiltElements.forEach(el => {
            // Gunakan 'pointermove' alih-alih 'mousemove' untuk performa lebih baik & klik lebih akurat
            el.addEventListener('pointermove', (e) => {
                // Hanya aktifkan tilt jika user tidak sedang menekan tombol (klik)
                if (e.buttons === 1) return; 

                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                // Kurangi sensitivitas rotasi agar tidak terlalu ekstrem saat mengarah ke tombol
                const rotateX = ((y - centerY) / centerY) * -8; 
                const rotateY = ((x - centerX) / centerX) * 8;
                
                el.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
                
                const card = el.querySelector('.service-card');
                if(card) {
                    const shadowX = (x - centerX) / 15;
                    const shadowY = (y - centerY) / 15;
                    card.style.boxShadow = `${-shadowX}px ${-shadowY}px 40px rgba(0,0,0,0.6), 0 0 30px rgba(255,152,0,0.1)`;
                }
            });
            
            el.addEventListener('pointerleave', () => {
                el.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
                const card = el.querySelector('.service-card');
                if(card) card.style.boxShadow = '0 15px 35px rgba(0,0,0,0.4)';
            });

            // Fix khusus: Reset transform sesaat saat user mengklik tombol WA
            const waBtn = el.querySelector('.btn-wa-card');
            if(waBtn) {
                waBtn.addEventListener('mousedown', () => {
                    el.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
                });
            }
        });

        // --- 4. AUTO SLIDE & MANUAL SLIDE LOGIC (SMOOTH & NO ARROWS) ---
        let slideIntervals = {};
        function startAutoSlide(productId) {
            if(slideIntervals[productId]) clearInterval(slideIntervals[productId]);
            slideIntervals[productId] = setInterval(() => moveSlide(productId, 1), 4000);
        }
        function stopAutoSlide(productId) {
            if(slideIntervals[productId]) clearInterval(slideIntervals[productId]);
        }
        function moveSlide(productId, direction) {
            const container = document.getElementById(`slider-${productId}`);
            if (!container) return;
            const slides = container.querySelectorAll('.slide-img');
            if(slides.length <= 1) return;
            let activeIndex = 0;
            slides.forEach((slide, index) => {
                if (slide.classList.contains('active')) activeIndex = index;
                slide.classList.remove('active');
            });
            let newIndex = activeIndex + direction;
            if (newIndex >= slides.length) newIndex = 0;
            if (newIndex < 0) newIndex = slides.length - 1;
            slides[newIndex].classList.add('active');
            
            // Pause auto slide briefly when manually clicked
            stopAutoSlide(productId);
            setTimeout(() => startAutoSlide(productId), 6000);
        }
        document.querySelectorAll('.slider-container[data-auto-slide="true"]').forEach(container => {
            const id = container.id.replace('slider-', '');
            if(container.querySelectorAll('.slide-img').length > 1) {
                startAutoSlide(id);
                // Pause on hover
                container.addEventListener('mouseenter', () => stopAutoSlide(id));
                container.addEventListener('mouseleave', () => startAutoSlide(id));
            }
        });

        // --- 5. SCROLL REVEAL ANIMATION ---
        const observerOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // --- 6. MODAL LOGIC ---
        let currentModalSlide = 0, modalImages = [];
        function openModal(product) {
            if (!product || typeof product !== 'object') return;
            modalImages = (Array.isArray(product.images) && product.images.length) ? product.images : ['/assets/images/placeholder.jpg'];
            currentModalSlide = 0; updateModalSlider();
            document.getElementById('modalName').textContent = product.name || 'Layanan';
            document.getElementById('modalPrice').textContent = product.price || '-';
            document.getElementById('modalDesc').textContent = product.description || 'Deskripsi tidak tersedia.';
            document.getElementById('modalSpecs').innerHTML = Object.entries(product.specs || {}).map(([k,v]) => `<div class="spec-item"><div class="spec-label">${k}</div><div class="spec-value">${v}</div></div>`).join('') || '<p style="color:#aaa">Tidak ada spesifikasi.</p>';
            document.getElementById('includesList').innerHTML = (Array.isArray(product.includes) ? product.includes : []).map(item => `<span class="include-tag"><i class="fas fa-check"></i> ${item}</span>`).join('') || '<p style="color:#aaa">Tidak ada item tambahan.</p>';
            
            // GANTI NOMOR WHATSAPP DI SINI (Modal JS)
            const waNum = '6281324481252';
            document.getElementById('modalBookBtn').href = `https://wa.me/${waNum}?text=${encodeURIComponent(`Halo Admin, saya tertarik dengan layanan ${product.name} (${product.price}). Bisa minta penawaran detail?`)}`;
            
            document.getElementById('productModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        function closeModal() { document.getElementById('productModal').classList.remove('active'); document.body.style.overflow = ''; }
        function updateModalSlider() { document.getElementById('modalMainImg').src = modalImages[currentModalSlide]; }
        function changeModalSlide(dir) { currentModalSlide = (currentModalSlide + dir + modalImages.length) % modalImages.length; updateModalSlider(); }
        document.getElementById('productModal').addEventListener('click', e => { if(e.target.id==='productModal') closeModal(); });
        document.addEventListener('keydown', e => { if(!document.getElementById('productModal').classList.contains('active')) return; if(e.key==='Escape') closeModal(); if(e.key==='ArrowLeft') changeModalSlide(-1); if(e.key==='ArrowRight') changeModalSlide(1); });

        // --- 7. CALCULATOR & AUTOMATIC WHATSAPP LOGIC ---
        const lengthInput = document.getElementById('calcLength');
        const heightInput = document.getElementById('calcHeight');
        const resultArea = document.getElementById('resultArea');
        function calculateArea() {
            const p = parseFloat(lengthInput.value) || 0;
            const t = parseFloat(heightInput.value) || 0;
            const area = (p * t).toFixed(2);
            resultArea.textContent = area > 0 ? `${area} m²` : '— m²';
            return area;
        }
        lengthInput.addEventListener('input', calculateArea);
        heightInput.addEventListener('input', calculateArea);
        
        function sendToWhatsApp(e) {
            e.preventDefault();
            const product = document.getElementById('calcProduct').value;
            const p = parseFloat(lengthInput.value) || 0;
            const t = parseFloat(heightInput.value) || 0;
            const material = document.getElementById('calcMaterial').value;
            const area = (p * t).toFixed(2);
            
            if (p === 0 || t === 0) { alert('Mohon isi Panjang dan Tinggi terlebih dahulu.'); return; }
            
            // Format Pesan WhatsApp Rapi
            const message = `*Halo Admin Bengkel Las, saya ingin request estimasi harga:*%0A%0A` +
                            `️ *Jenis Produk:* ${product}%0A` +
                            `📏 *Dimensi:* ${p}m (Panjang) x ${t}m (Tinggi)%0A` +
                            `📐 *Perkiraan Luas:* ${area} m²%0A` +
                            `🔩 *Tipe Material:* ${material}%0A%0A` +
                            `Mohon info estimasi biaya dan jadwal surveynya. Terima kasih.`;
            
            // GANTI NOMOR WHATSAPP DI SINI (Kalkulator)
            const waNumber = '6281324481252'; 
            window.open(`https://wa.me/${waNumber}?text=${message}`, '_blank');
        }

        // Parallax Effect untuk Background
        document.addEventListener('mousemove', (e) => {
            const x = (window.innerWidth - e.pageX * 2) / 100;
            const y = (window.innerHeight - e.pageY * 2) / 100;
            document.body.style.backgroundPosition = `calc(50% + ${x}px) calc(50% + ${y}px)`;
        });
    </script>
</body>
</html>