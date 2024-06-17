<header style="background-color: dodgerblue; padding: 10px;">
    <nav class="container">
        <ul style="list-style-type: none; display: flex; gap: 15px;">
            <li>
                <a href="/" class="navigation-link <?= $uri==="/" ? 'active' : ''?>">
                    Home
                </a>
            </li>
            <li>
                <a href="/blogs" class="navigation-link <?= $uri==="/blogs" ? 'active' : ''?>">
                    Blogs
                </a>
            </li>
            <li>
                <a href="/blogs/new" class="navigation-link <?= $uri==="/blogs/new" ? 'active' : ''?>">
                    Create blogpost
                </a>
            </li>
            <!-- <li>
                <a href="/login" class="navigation-link <?= $uri==="/login" ? 'active' : ''?>">
                    Login
                </a>
            </li> -->
        </ul>
    </nav>
</header>