 <!-- Purpose: To display the news page -->
<!-- start here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your TradingView Page</title>
    <style>
        body {
            background-color: #2f4f4f;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .top-bar {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            padding: 10px 0;
            overflow: hidden;
        }

        .list-inline {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .list-inline-item {
            padding: 0 10px;
            display: inline-block;
            white-space: nowrap;
            animation: marquee 20s linear infinite;
            transform: translateX(100%);
        }

        .list-inline-item span {
            margin-left: 10px;
        }

        .text-success {
            color: #00ff00;
        }

        .text-danger {
            color: #ff0000;
        }

        .fw-bold {
            font-weight: bold;
        }

        .fs-13 {
            font-size: 13px;
        }

        .marquee-wrapper {
            width: 100%;
            overflow: hidden;
        }

        .marquee-content {
            white-space: nowrap;
            display: inline-block;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .spacer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            margin: 10px;
            background-color: #2f4f4f;
        }

        .blue-text {
            font-size: 20px; /* Increase font size for better visibility */
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }

        .tradingview-widget-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .tradingview-widget-copyright {
            text-align: center;
            margin-top: 10px;
        }

        .tradingview-widget-copyright a {
            color: #2f4f4f;
            text-decoration: none;
        }

        .back-button {
            background-color: #2f4f4f;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #1a2a2a;
        }
    </style>
</head>
<body>
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  </div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "description": "AUDUSD",
      "proName": "FX:AUDUSD"
    },
    {
      "description": "EURCAD",
      "proName": "EURCAD"
    },
    {
      "description": "NASDAQ",
      "proName": "EIGHTCAP:NDQ100"
    },
    {
      "description": "US30",
      "proName": "EIGHTCAP:US30"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "compact",
  "locale": "en"
}
  </script>

</div>
<div class="spacer">
   <a href="https://24hrfxtradingorg.co.ke/WallStreet/#/charts" class="back-button">Back</a>

   <h3 class="blue-text">NextGen top stories</h3>
    
</div>
<div class="container">
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                    <span class="blue-text">NextGen top stories</span>
                </a>
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
            {
                "feedMode": "all_symbols",
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "regular",
                "width": 480,
                "height": 830,
                "locale": "en"
            }
            </script>
        </div>
        <a href="http://localhost:4200/#/charts" class="back-button">Go to Dashboard</a>
    </div>
</body>
</html>
