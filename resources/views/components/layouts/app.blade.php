<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visual Studio Code - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    @livewireStyles()
    <style>
        .span{
        color: #f9826c;
    }
        body {
            margin: 0;
            font-family: 'Consolas', 'Courier New', monospace;
            background-color: #1e1e1e;
            color: #d4d4d4;
        }

        .vscode-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Title Bar */
        .title-bar {
            background-color: #323233;
            color: #cccccc;
            padding: 8px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            height: 30px;
            border-bottom: 1px solid #2d2d30;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .window-controls {
            display: flex;
            gap: 10px;
        }

        .window-control {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .close { background-color: #ff5f56; }
        .minimize { background-color: #ffbd2e; }
        .maximize { background-color: #27ca3f; }

        /* Menu Bar */
        .menu-bar {
            background-color: #2d2d30;
            padding: 8px 16px;
            display: flex;
            gap: 20px;
            font-size: 13px;
            height: 30px;
            align-items: center;
            position: fixed;
            top: 30px;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .menu-item {
            color: #cccccc;
            text-decoration: none;
            padding: 4px 8px;
            border-radius: 3px;
        }

        .menu-item:hover {
            background-color: #3c3c3c;
            color: #ffffff;
        }

        /* Tab Bar */
        .tab-bar {
            background-color: #2d2d30;
            display: flex;
            border-bottom: 1px solid #2d2d30;
            height: 35px;
            position: fixed;
            top: 60px;
            left: 0;
            right: 0;
            z-index: 1000;
            overflow-x: auto;
            white-space: nowrap;
        }

        .tab {
            background-color: #2d2d30;
            color: #969696;
            padding: 8px 16px;
            border-right: 1px solid #2d2d30;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 13px;
            position: relative;
            min-width: 120px;
        }

        .tab.active {
            background-color: #1e1e1e;
            color: #ffffff;
            border-bottom: 1px solid #007acc;
        }

        .tab:hover:not(.active) {
            background-color: #3c3c3c;
        }

        .tab-icon {
            width: 16px;
            height: 16px;
        }

        /* Main Content */
        .main-content {
            display: flex;
            flex: 1;
            margin-top: 95px; /* Account for fixed header elements */
            height: calc(100vh - 117px); /* Adjusted to account for fixed headers and status bar */
        }

        /* Sidebar */
        .sidebar {
            width: 300px;
            background-color: #252526;
            border-right: 1px solid #2d2d30;
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 95px; /* Position below the fixed headers */
            left: 0;
            bottom: 22px; /* Account for status bar height */
            overflow-y: auto; /* Allow scrolling within sidebar if content is too tall */
            z-index: 999;
            transition: transform 0.3s ease;
        }

        .sidebar-header {
            padding: 8px 16px;
            background-color: #2d2d30;
            color: #cccccc;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        .file-explorer {
            flex: 1;
            padding: 8px 0;
        }

        .folder {
            padding: 4px 16px;
            color: #cccccc;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .folder-icon {
            color: #dcb67a;
        }

        .file {
            padding: 4px 32px;
            color: #d4d4d4;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .file:hover {
            background-color: #2a2d2e;
        }

        .file.active {
            background-color: #37373d;
            color: #ffffff;
        }

        .file-icon {
            width: 16px;
            text-align: center;
        }

        .tsx-icon { color: #61dafb; }
        .html-icon { color: #e34c26; }
        .css-icon { color: #1572b6; }
        .js-icon { color: #f7df1e; }
        .md-icon { color: #519aba; }

        /* Editor Area */
        .editor-container {
            flex: 1;
            display: flex;
            margin-left: 300px;
            overflow: auto;
        }

        .code-editor {
            width: 50%;
            background-color: #1e1e1e;
            padding: 16px;
            font-family: 'Consolas', 'Courier New', monospace;
            font-size: 14px;
            line-height: 1.6;
            overflow-y: auto;
        }

        .line-numbers {
            color: #858585;
            margin-right: 16px;
            text-align: right;
            user-select: none;
            width: 40px;
            display: inline-block;
        }

        .code-line {
            white-space: pre;
        }

        /* Syntax Highlighting */
        .keyword { color: #569cd6; }
        .string { color: #ce9178; }
        .comment { color: #6a9955; }
        .function { color: #dcdcaa; }
        .variable { color: #9cdcfe; }
        .operator { color: #d4d4d4; }
        .tag { color: #569cd6; }
        .attribute { color: #92c5f8; }
        .value { color: #ce9178; }

        /* Preview Area */
        .preview-area {
            width: 50%;
            background-color: #2d2d30;
            border-left: 1px solid #2d2d30;
            overflow-y: auto;
        }

        .preview-content {
            padding: 40px;
            color: #333;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        .hero-section {
            text-align: center;
            padding: 60px 0;
        }

        .hero-name {
            font-size: 3.5rem;
            font-weight: 300;
            color: snow;
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: 1.5rem;
            color: #7f8c8d;
            margin-bottom: 30px;
            font-weight: 400;
        }

        .hero-description {
            font-size: 1.1rem;
            color: #5d6d7e;
            max-width: 600px;
            margin: 0 auto 40px;
            line-height: 1.8;
        }

        .cta-button {
            background-color: #e74c3c;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #c0392b;
            color: white;
            text-decoration: none;
        }

        .arrow-icon {
            margin-left: 10px;
        }

        /* Status Bar */
        .status-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #007acc;
            color: #ffffff;
            padding: 4px 16px;
            font-size: 12px;
            height: 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            overflow-x: auto;
        }

        /* Burger Menu */
        .burger-menu {
            display: none;
            position: fixed;
            top: 70px;
            left: 10px;
            z-index: 1001;
            background-color: #2d2d30;
            border: none;
            color: #cccccc;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .editor-container {
                margin-left: 0;
                width: 100%;
            }
            
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
            
            .burger-menu {
                display: block;
            }
            
            .tab {
                min-width: 100px;
                padding: 8px 12px;
            }
            
            .status-bar {
                font-size: 10px;
            }
        }

        @media (max-width: 768px) {
            .hero-name {
                font-size: 2.5rem;
            }
            
            .hero-title {
                font-size: 1.2rem;
            }
            
            .hero-description {
                font-size: 1rem;
                padding: 0 20px;
            }
            
            .tab {
                min-width: 80px;
                padding: 8px 8px;
                font-size: 12px;
            }
            
            .tab-icon {
                display: none;
            }
            
            .status-bar div {
                display: flex;
                flex-wrap: wrap;
            }
            
            .status-bar span {
                margin-left: 10px;
                margin-bottom: 2px;
            }
        }

        @media (max-width: 480px) {
            .menu-bar {
                gap: 10px;
                font-size: 12px;
                padding: 8px 8px;
            }
            
            .menu-item {
                padding: 4px 4px;
            }
            
            .hero-name {
                font-size: 2rem;
            }
            
            .hero-title {
                font-size: 1rem;
            }
            
            .tab {
                min-width: 70px;
                padding: 8px 6px;
                font-size: 11px;
            }
            
            .status-bar {
                font-size: 9px;
                padding: 4px 8px;
            }
        }
    </style>
</head>
<body>
    <div class="vscode-container">
        <!-- Title Bar -->
        <div class="title-bar">
            <div>
                <span>
                    <i class="fab fa-microsoft"></i> Blnd Bakhtyar - Visual Studio Code
                </span>
            </div>
            <div class="window-controls">
                <div class="window-control minimize"></div>
                <div class="window-control maximize"></div>
                <div class="window-control close"></div>
            </div>
        </div>

        <!-- Menu Bar -->
        <div class="menu-bar">
            <a href="#" class="menu-item">File</a>
            <a href="#" class="menu-item">Edit</a>
            <a href="#" class="menu-item">View</a>
            <a href="#" class="menu-item">Go</a>
            <a href="#" class="menu-item">Run</a>
            <a href="#" class="menu-item">Terminal</a>
            <a href="#" class="menu-item">Help</a>
        </div>

        <!-- Tab Bar -->
        <div class="tab-bar">
            <a href="./" wire:navigate style="text-decoration: none;">
            <div class="tab active">
                <span class="tab-icon tsx-icon">⚛</span>
                <span>home.tsx</span>
            </div>
            </a>
            <a href="./about" wire:navigate style="text-decoration: none;">
            <div class="tab">
                <span class="tab-icon html-icon">📄</span>
                <span>about.html</span>
            </div>
            </a>
            <a href="./contact" wire:navigate style=" text-decoration: none;">
            <div class="tab">
                <span class="tab-icon css-icon">🎨</span>
                <span>contact.css</span>
            </div>
            </a>
            <a href="./app" wire:navigate style=" text-decoration: none;">
            <div class="tab">
                <span class="tab-icon js-icon">📜</span>
                <span>app.js</span>
            </div>
            </a>
            <a href="./github" wire:navigate style=" text-decoration: none;">
            <div class="tab">
                <span class="tab-icon md-icon">📋</span>
                <span>github.md</span>
            </div>
            </a>
        </div>

        <!-- Burger Menu Button -->
        <button class="burger-menu" id="burgerMenu">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <i class="fas fa-folder-open"></i> EXPLORER
                </div>
                <div class="file-explorer">
                
                    <div class="folder">
                        <i class="fas fa-chevron-down"></i>
                        <i class="fas fa-folder-open folder-icon"></i>
                        <span>PORTFOLIO</span>
                    </div>
                    <a href="./" wire:navigate  style="text-decoration: none;">
                    <div class="file active">
                        <span class="file-icon tsx-icon">⚛</span>
                        <span>home.tsx</span>
                    </div>
                    </a>
                    <a href="./about" wire:navigate style="text-decoration: none;">
                    <div class="file">
                        <span class="file-icon html-icon">📄</span>
                        <span>about.html</span>
                    </div>
                    </a>
                     <a href="./contact" wire:navigate style=" text-decoration: none;">
                    <div class="file">
                        <span class="file-icon css-icon">🎨</span>
                        <span>contact.css</span>
                    </div>
                    </a>
                    <a href="./app" style="text-decoration: none;">
                    <div class="file">
                        <span class="file-icon js-icon">📜</span>
                        <span>app.js</span>
                    </div>
                    </a>
                    <a href="./github" wire:navigate style="text-decoration: none">
                    <div class="file">
                        <span class="file-icon md-icon">📋</span>
                        <span>github.md</span>
                    </div>
                    </a>
                </div>
            </div>


            <!--code-->

           <div class="editor-container">
            @yield('welcome')
           @yield('about')
           @yield('contact')
           @yield('app')
           @yield('github')
           </div>
            <!--code-->


        <!-- Status Bar -->
        <div class="status-bar mt-auto w-100">
            <div>
                <span><i class="fab fa-github"></i> main</span>
                <span><i class="fas fa-exclamation-triangle"></i> 0</span>
                <span><i class="fas fa-times-circle"></i> 0</span>
            </div>
            <div>
                <span>Ln 1, Col 1</span>
                <span>Spaces: 2</span>
                <span>UTF-8</span>
                <span>TypeScript React</span>
                <span><i class="fab fa-github"></i> codenashore</span>
                <span><i class="fas fa-check"></i> Prettier</span>
            </div>
        </div>
    </div>

    <script>
        // Simple tab switching functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Update file explorer selection
                document.querySelectorAll('.file').forEach(f => f.classList.remove('active'));
                const filename = this.querySelector('span:last-child').textContent;
                document.querySelectorAll('.file').forEach(file => {
                    if (file.querySelector('span:last-child').textContent === filename) {
                        file.classList.add('active');
                    }
                });
            });
        });

        // File explorer click functionality
        document.querySelectorAll('.file').forEach(file => {
            file.addEventListener('click', function() {
                // Remove active class from all files
                document.querySelectorAll('.file').forEach(f => f.classList.remove('active'));
                // Add active class to clicked file
                this.classList.add('active');
                
                // Update tab selection
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                const filename = this.querySelector('span:last-child').textContent;
                document.querySelectorAll('.tab').forEach(tab => {
                    if (tab.querySelector('span:last-child').textContent === filename) {
                        tab.classList.add('active');
                    }
                });
            });
        });

        // Burger menu functionality
        const burgerMenu = document.getElementById('burgerMenu');
        const sidebar = document.getElementById('sidebar');
        
        burgerMenu.addEventListener('click', function() {
            sidebar.classList.toggle('open');
        });

        // Close sidebar when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnBurger = burgerMenu.contains(event.target);
            
            if (!isClickInsideSidebar && !isClickOnBurger && window.innerWidth <= 992) {
                sidebar.classList.remove('open');
            }
        });

        // Update tab and file active states when navigating
        function updateActiveStates() {
            // This would be more sophisticated in a real app with routing
            // For now, we'll just simulate it based on URL
            const path = window.location.pathname;
            let activeFile = 'home.tsx';
            
            if (path.includes('about')) activeFile = 'about.html';
            else if (path.includes('contact')) activeFile = 'contact.css';
            else if (path.includes('app')) activeFile = 'app.js';
            else if (path.includes('github')) activeFile = 'github.md';
            
            // Update tabs
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
                if (tab.querySelector('span:last-child').textContent === activeFile) {
                    tab.classList.add('active');
                }
            });
            
            // Update files
            document.querySelectorAll('.file').forEach(file => {
                file.classList.remove('active');
                if (file.querySelector('span:last-child').textContent === activeFile) {
                    file.classList.add('active');
                }
            });
        }

        // Call this function when the page loads
        updateActiveStates();
    </script>

    @livewireScripts()
    
</body>
</html>