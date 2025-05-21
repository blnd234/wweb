@extends('components.layouts.app')


@section('welcome')

<div>
<!-- Editor Container -->
            <div class="editor-container ">
                <!-- Code Editor -->
                <div class="code-editor">
                    <div>
                        <span class="line-numbers">1</span>
                        <span class="code-line"><span class="keyword">const</span> <span class="function">HomePage</span> = () => {</span>
                    </div>
                    <div>
                        <span class="line-numbers">2</span>
                        <span class="code-line">  <span class="keyword">const</span> [<span class="variable">isLoaded</span>, <span class="variable">setIsLoaded</span>] = <span class="function">useState</span>(<span class="keyword">true</span>);</span>
                    </div>
                    <div>
                        <span class="line-numbers">3</span>
                        <span class="code-line">  <span class="keyword">const</span> <span class="variable">developerInfo</span> = {</span>
                    </div>
                    <div>
                        <span class="line-numbers">4</span>
                        <span class="code-line">    <span class="attribute">name</span>: <span class="string">'Blnd Bakhtyar'</span>,</span>
                    </div>
                    <div>
                        <span class="line-numbers">5</span>
                        <span class="code-line">    <span class="attribute">role</span>: <span class="string">'web Developer'</span>,</span>
                    </div>
                    <div>
                        <span class="line-numbers">6</span>
                        <span class="code-line">    <span class="attribute">bio</span>: <span class="string">'Building modern web experiences'</span></span>
                    </div>
                    <div>
                        <span class="line-numbers">7</span>
                        <span class="code-line">  };</span>
                    </div>
                    <div>
                        <span class="line-numbers">8</span>
                        <span class="code-line"></span>
                    </div>
                    <div>
                        <span class="line-numbers">9</span>
                        <span class="code-line">  <span class="function">useEffect</span>(() => {</span>
                    </div>
                    <div>
                        <span class="line-numbers">10</span>
                        <span class="code-line">    <span class="variable">document</span>.<span class="attribute">title</span> = `${<span class="variable">developerInfo</span>.<span class="attribute">name</span>} | Portfolio`;</span>
                    </div>
                    <div>
                        <span class="line-numbers">11</span>
                        <span class="code-line">    <span class="function">setIsLoaded</span>(<span class="keyword">true</span>);</span>
                    </div>
                    <div>
                        <span class="line-numbers">12</span>
                        <span class="code-line">  }, []);</span>
                    </div>
                    <div>
                        <span class="line-numbers">13</span>
                        <span class="code-line"></span>
                    </div>
                    <div>
                        <span class="line-numbers">14</span>
                        <span class="code-line">  <span class="keyword">return</span> (</span>
                    </div>
                    <div>
                        <span class="line-numbers">15</span>
                        <span class="code-line">    <span class="tag">&lt;main</span> <span class="attribute">className</span>=<span class="string">"hero-container"</span><span class="tag">&gt;</span></span>
                    </div>
                    <div>
                        <span class="line-numbers">16</span>
                        <span class="code-line">      <span class="tag">&lt;h1&gt;</span>{<span class="variable">developerInfo</span>.<span class="attribute">name</span>}<span class="tag">&lt;/h1&gt;</span></span>
                    </div>
                    <div>
                        <span class="line-numbers">17</span>
                        <span class="code-line">      <span class="tag">&lt;p&gt;</span>{<span class="variable">developerInfo</span>.<span class="attribute">role</span>}<span class="tag">&lt;/p&gt;</span></span>
                    </div>
                    <div>
                        <span class="line-numbers">18</span>
                        <span class="code-line">      <span class="tag">&lt;div</span> <span class="attribute">className</span>=<span class="string">"cta"</span><span class="tag">&gt;</span></span>
                    </div>
                    <div>
                        <span class="line-numbers">19</span>
                        <span class="code-line">        <span class="tag">&lt;Link</span> <span class="attribute">href</span>=<span class="string">"/projects"</span><span class="tag">&gt;</span>View Projects<span class="tag">&lt;/Link&gt;</span></span>
                    </div>
                    <div>
                        <span class="line-numbers">20</span>
                        <span class="code-line">      <span class="tag">&lt;/div&gt;</span></span>
                    </div>
                    <div>
                        <span class="line-numbers">21</span>
                        <span class="code-line">    <span class="tag">&lt;/main&gt;</span></span>
                    </div>
                    <div>
                        <span class="line-numbers">22</span>
                        <span class="code-line">  );</span>
                    </div>
                    <div>
                        <span class="line-numbers">23</span>
                        <span class="code-line">};</span>
                    </div>
                </div>

                <!-- Preview Area -->
                <div class="preview-area">
                    <div class="preview-content">
                        <div class="hero-section">
                            <h1 class="hero-name">Blnd Bakhtyar</h1>
                            <p class="hero-title"> Web Developer</p>
                            <p class="hero-description">
                                 I craft responsive, high-performance web using the latest technologies — with clean code, scalable structure, and seamless user experiences.                            </p>
                            <a href="#" class="cta-button">
                                The things I know
                                <span class="arrow-icon">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection