<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Monitoring Cargo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ebf0 100%);
            min-height: 100vh;
            padding-bottom: 40px;
        }

        .navbar {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .navbar h2 {
            font-size: 22px;
            background: linear-gradient(135deg, #2d7df6, #1e5bb8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            background: linear-gradient(135deg, #2d7df6, #1e5bb8);
            padding: 10px 24px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 15px rgba(45, 125, 246, 0.3);
        }

        .navbar a:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(45, 125, 246, 0.5);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 30px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: currentColor;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.2);
        }

        .card h3 {
            font-size: 36px;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .card p {
            color: #666;
            font-size: 15px;
            font-weight: 500;
        }

        .pending { color: #f39c12; }
        .proses  { color: #3498db; }
        .transit { color: #9b59b6; }
        .sampai  { color: #2ecc71; }

        .table-container {
            background: white;
            margin: 20px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            max-width: 1200px;
            margin: 20px auto;
        }

        .table-container h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
            font-weight: 700;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            overflow: hidden;
        }

        table th {
            background: linear-gradient(135deg, #2d7df6, #1e5bb8);
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
            font-size: 14px;
        }

        table th:first-child {
            border-radius: 8px 0 0 0;
        }

        table th:last-child {
            border-radius: 0 8px 0 0;
        }

        table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #f0f0f0;
            color: #555;
        }

        table tbody tr {
            transition: background 0.3s;
        }

        table tbody tr:hover {
            background: #f0f4f8;
        }

        .badge {
            padding: 6px 16px;
            border-radius: 20px;
            color: white;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .badge.pending { background: linear-gradient(135deg, #f39c12, #e67e22); }
        .badge.proses  { background: linear-gradient(135deg, #3498db, #2980b9); }
        .badge.transit { background: linear-gradient(135deg, #9b59b6, #8e44ad); }
        .badge.sampai  { background: linear-gradient(135deg, #2ecc71, #27ae60); }

        footer {
            text-align: center;
            padding: 20px;
            color: white;
            font-size: 14px;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar h2 {
                font-size: 18px;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .table-container {
                overflow-x: auto;
                margin: 20px 10px;
                padding: 20px;
            }

            table {
                font-size: 13px;
            }

            table th, table td {
                padding: 10px 8px;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <h2>🚚 Cargo Monitoring System</h2>
   <a href="{{ route('login') }}">Login</a>
</div>

<!-- ===== SUMMARY ===== -->
<section class="stats">
    <div class="card pending">
        <h3>12</h3>
        <p>Pending</p>
    </div>
    <div class="card proses">
        <h3>8</h3>
        <p>Proses</p>
    </div>
    <div class="card transit">
        <h3>5</h3>
        <p>Transit</p>
    </div>
    <div class="card sampai">
        <h3>20</h3>
        <p>Sampai</p>
    </div>
</section>

<section class="table-container">
    <h3>📦 Data Cargo</h3>

    <table>
        <thead>
            <tr>
                <th>No Resi</th>
                <th>Pengirim</th>
                <th>Tujuan</th>
                <th>Berat (Kg)</th>
                <th>Vehicle</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>CRG-001</td>
                <td>PT Maju Jaya</td>
                <td>Banda Aceh</td>
                <td>120</td>
                <td>Truck Fuso</td>
                <td><span class="badge pending">Pending</span></td>
            </tr>
            <tr>
                <td>CRG-002</td>
                <td>Andi</td>
                <td>Medan</td>
                <td>80</td>
                <td>Pickup</td>
                <td><span class="badge proses">Proses</span></td>
            </tr>
            <tr>
                <td>CRG-003</td>
                <td>Siti</td>
                <td>Lhokseumawe</td>
                <td>200</td>
                <td>Truck Box</td>
                <td><span class="badge transit">Transit</span></td>
            </tr>
            <tr>
                <td>CRG-004</td>
                <td>CV Amanah</td>
                <td>Bireuen</td>
                <td>60</td>
                <td>Pickup</td>
                <td><span class="badge sampai">Sampai</span></td>
            </tr>
            <tr>
                <td>CRG-005</td>
                <td>Budi Santoso</td>
                <td>Jakarta</td>
                <td>150</td>
                <td>Truck Wing Box</td>
                <td><span class="badge proses">Proses</span></td>
            </tr>
            <tr>
                <td>CRG-006</td>
                <td>PT Sejahtera</td>
                <td>Surabaya</td>
                <td>300</td>
                <td>Container</td>
                <td><span class="badge sampai">Sampai</span></td>
            </tr>
        </tbody>
    </table>
</section>

<footer>
    © 2026 Cargo Monitoring System - All Rights Reserved
</footer>

</body>
</html>
