@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-8 lg:flex-row lg:mb-12">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>
{{--             <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://jigsaw.tighten.co" title="Jigsaw by Tighten" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">About Jigsaw</a>
            </div> --}}

            <p class="text-lg">Green is yes; red is no; grey hasn't been tested yet.</p>
            <p>Source here, in case you want to make PRs: <a href="https://github.com/tighten/laravelm1">github.com/tighten/laravelm1</a></p>
            <p>Another resource here: https://roaringapps.com/collections/list-of-apple-silicon-native-apps</p>
        </div>
    </div>

    <hr class="block my-8 border lg:hidden">

    <h2>Laravel Command-line tools</h2>
    <ul>
        <li>@include('_partials.yay')Laravel Installer</li>
    </ul>

    <h2>Laravel-ancillary command-line tools</h2>
    <ul>
        <li>@include('_partials.yay')Vim</li>
        <li>@include('_partials.yay')Composer</li>
        <li>@include('_partials.dunno')Homebrew</li>
        <li>@include('_partials.dunno')npm</li>
        <li>@include('_partials.dunno')nvm</li>
        <li>@include('_partials.yay')Lambo</li>
        <li>@include('_partials.yay')oh-my-zsh</li>
        <li>@include('_partials.dunno')Redis</li>
    </ul>

    <h2>Laravel internal tools</h2>
    <ul>
        <li>@include('_partials.yay')Artisan</li>
        <li>@include('_partials.yay')Tinker</li>
        <li>@include('_partials.dunno')Horizon</li>
    </ul>

    <h2>Laravel development environments</h2>
    <ul>
        <li>@include('_partials.dunno')Laravel Valet</li>
        <li>@include('_partials.dunno')Laravel Homestead</li>
    </ul>

    <h2>Docker-based tools</h2>
    <ul>
        <li>@include('_partials.dunno')Docker</li>
        <li>@include('_partials.dunno')Vessel</li>
        <li>@include('_partials.dunno')Takeout</li>
    </ul>

    <h2>Common macOS tools used by Laravel developers</h2>
    <ul>
        <li>@include('_partials.yay')iTerm</li>
        <li>@include('_partials.dunno')Tinkerwell</li>
        <li>@include('_partials.dunno')Sublime Text</li>
        <li>@include('_partials.dunno')VS Code</li>
        <li>@include('_partials.dunno')PHPStorm</li>
        <li>@include('_partials.dunno')TablePlus</li>
        <li>@include('_partials.dunno')GitHub Desktop</li>
        <li>@include('_partials.dunno')Slack</li>
        <li>@include('_partials.dunno')Discord</li>
        <li>@include('_partials.dunno')Trello</li>
        <li>@include('_partials.dunno')Rocket</li>
        <li>@include('_partials.dunno')Parallels</li>
        <li>@include('_partials.dunno')Rogue Amoeba tools</li>
        <li>@include('_partials.dunno')Adobe Audition</li>
        <li>@include('_partials.dunno')Screenflow</li>
        <li>@include('_partials.dunno')OBS</li>
        <li>@include('_partials.dunno')Invoker</li>
    </ul>

    <h2>Testing on a brand new machine, having taken these steps:</h2>
    <ul class="list-disc">
        <li>Download iTerm</li>
        <li>Install oh-my-zsh, which prompted installing the command line developer tools</li>
        <li>Install oh-my-zsh again</li>
        <li>`sudo mkdir /usr/local/bin && chmod 775 /usr/local/bin` and hope that's not the wrong thing to do
        <li>Install composer and move to /usr/local/bin and wonder why i have to sudo it (`sudo mv composer.phar /usr/local/bin/composer`)</li>
        <li>Install the Laravel installer (`composer global update laravel/installer`)</li>
        <li>Use the installer (`mkdir ~/Sites && cd ~/Sites && laravel new m1suckazzzzzz`)</li>
        <li>Womp, no find Laravel, fix our Path. edit `~/.zshrc`, and add this line up top: `export PATH="$PATH:$HOME/.composer/vendor/bin"`</li>
        <li>Use the installer (`mkdir ~/Sites && cd ~/Sites && laravel new m1suckazzzzzz`)</li>
        <li>Read and consider this article: <a href="https://www.notion.so/Run-x86-Apps-including-homebrew-in-the-Terminal-on-Apple-Silicon-8350b43d97de4ce690f283277e958602">Run x86 Apps including homebrew on the Terminal on Apple Silicon</a>, then decide nope</li>
        <li>Decide on this one instead: <a href="https://soffes.blog/homebrew-on-apple-silicon">Homebrew on Apple Silicon</a></li>
        <li>In iTerm, run: `arch -x86_64 /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"`. Get error: "arch: posix_spawnp: /bin/bash: Bad CPU type in executable" ... Googling, no luck. Gonna try again in the morning. MES 12:18am 2020-11-19 Eastern</li>
        <li>Stubborn. Stayed up. Found answer here: https://github.com/Homebrew/brew/issues/7857#issuecomment-729726634</li>
        <li>`/usr/sbin/softwareupdate --install-rosetta --agree-to-license`</li>
        <li>`arch -x86_64 /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"` YAY!</li>
        <li>A few errors... `get_owner:1: command not found: stat -f` happened twice. Hit the "Press RETURN to continue or " text.. hit return a few times, tried other keys, nothing's working. Gonna let it just run overnight I guess. 12:28am</li>
        <li>`composer require tightenco/lambo && cd ~/Sites && lambo mynewsite` .. works great ✓</li>
        <li>Tried to run the Brew installer. Hangs on "Press RETURN" again. 🤷‍♂️ Really to bed this time. 12:36am</li>
        <li>Woke up to Jess Archer giving my sleep-addled brain the answer on my sudo permissions issue above, which was: you didn't chown /usr/local/bin, dummy!</li>

    </ul>

</section>
@endsection
