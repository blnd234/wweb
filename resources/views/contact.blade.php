@extends('components.layouts.app')

@section('contact')
<style>
     .contact-container {
            max-width: 800px;
            width: 100%;
            text-align: center;
        }
        
        .contact-title {
            font-size: 3rem;
            font-weight: 500;
            color: #ff7f60;
            margin-bottom: 2rem;
            letter-spacing: 0.05em;
            text-align: center !important;
            position: relative;
            left: 200px;
        }
        
        .contact-description {
            font-size: 1.25rem;
            line-height: 1.6;
            margin-bottom: 3rem;
            color: #b8b8b8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            left: 200px;
        }
        
        .code-block {
            background-color: #1e1e1e;
            border: 2px solid #ff7f60;
            border-radius: 8px;
            padding: 1.5rem;
            text-align: left;
            font-size: 1.1rem;
            line-height: 1.8;
            position: relative;
            overflow-x: auto;
            left: 25%;
        }
        
        .line-numbers {
            color: #666;
            user-select: none;
            position: absolute;
            left: 1rem;
            top: 2rem;
            line-height: 1.8;
            font-size: 1.1rem;
        }
        
        .code-content {
            margin-left: 3rem;
            
        }
        
        .socials {
            color: #ff7f60;
        }
        
        .property {
            color: #9cdcfe;
        }
        
        .value {
            color: #ff7f60;
        }
        
        .bracket {
            color: #ffffff;
        }
        
        .semicolon {
            color: #ffffff;
        }
        
        .code-line {
            margin: 0.2rem 0;
        }
        
        .code-line:hover .value {
            text-decoration: underline;
            cursor: pointer;
        }
        
        @media (max-width: 768px) {
            .contact-title {
                font-size: 2.5rem;
            }
            
            .contact-description {
                font-size: 1.1rem;
            }
            
            .code-block {
                font-size: 1rem;
                padding: 1.5rem;
            }
            
            .code-content {
                margin-left: 2.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .contact-title {
                font-size: 2rem;
            }
            
            .contact-description {
                font-size: 1rem;
            }
            
            .code-block {
                font-size: 0.9rem;
                padding: 1rem;
            }
            
            .code-content {
                margin-left: 2rem;
            }
        }
</style>
<div class="contact-container mt-2">
        <h1 class="contact-title">Contact Me</h1>
        
        <p class="contact-description">
            Feel free to reach out to me through any of the social platforms below. I'm always open to new opportunities and connections.
        </p>
        
        <div class="code-block">
            <div class="line-numbers">
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
            </div>
            
            <div class="code-content">
                <div class="code-line"><span class="socials">.socials</span> <span class="bracket">{</span></div>
                <div class="code-line">    <span class="property">email:</span> <span class="value">blndbl4ne.i1@gmail.com</span><span class="semicolon">;</span></div>
                <div class="code-line">    <span class="property">Facebook:</span> <span class="value">Bliind Baxtyar</span><span class="semicolon">;</span></div>
                <div class="code-line"><span class="bracket">}</span></div>
            </div>
        </div>
    </div>

@endsection
