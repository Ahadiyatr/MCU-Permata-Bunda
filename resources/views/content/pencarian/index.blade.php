@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search Interface</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f5f7fa;
                padding: 20px;
            }

            .search-container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background: #ffffff;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }

            .search-title {
                color: #6c757d;
                font-size: 14px;
                margin-bottom: 12px;
                font-weight: 400;
            }

            .search-tabs {
                display: flex;
                border-bottom: 1px solid #e0e0e0;
                margin-bottom: 20px;
            }

            .search-tab {
                padding: 8px 16px;
                cursor: pointer;
                color: #495057;
                font-weight: 500;
                font-size: 14px;
                position: relative;
            }

            .search-tab.active {
                color: #3f80ea;
            }

            .search-tab.active::after {
                content: '';
                position: absolute;
                bottom: -1px;
                left: 0;
                width: 100%;
                height: 2px;
                background-color: #3f80ea;
            }

            .search-input-group {
                display: flex;
                align-items: center;
                border: 1px solid #d1d5db;
                border-radius: 6px;
                overflow: hidden;
                transition: border-color 0.3s;
            }

            .search-input-group:focus-within {
                border-color: #3f80ea;
                box-shadow: 0 0 0 2px rgba(63, 128, 234, 0.2);
            }

            .search-input {
                flex: 1;
                padding: 10px 16px;
                border: none;
                outline: none;
                font-size: 14px;
                color: #333;
            }

            .search-button {
                padding: 10px 16px;
                background: #3f80ea;
                color: white;
                border: none;
                cursor: pointer;
                transition: background 0.2s;
            }

            .search-button:hover {
                background: #326dc7;
            }
        </style>
    </head>

    <body>
        <div class="search-container">
            <p class="search-title">Type keyword to search...</p>

            <div class="search-tabs">
                <div class="search-tab active">Name / NIK / NoBpJS / Phone</div>
            </div>

            <div class="search-input-group">
                <input type="text" class="search-input" placeholder="Keyword Search" value="6843">
                <button class="search-button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </body>
@endsection
