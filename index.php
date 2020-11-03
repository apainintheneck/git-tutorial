<!DOCTYPE html>
<html lang="en">
<!--

Website: Intro to Git
Page: index.php
Author: Kevin Robell
Purpose: This page gives a quick intro to git conceptually. It answers basic questions and lists basic concepts.

-->
    <head>
        <meta charset="utf-8" />
        <title> Intro to Git </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <header>
            <h1> What is </h1>
            <img id="logo" src="img/Git-Logo-Black.png" alt="git logo" />
            <h1> ? </h1>
        </header>
        
        <nav>
            <hr />
            <a id="current-page" href="index.php">Home</a>
            <a href="starting.html">Starting Out</a>
            <a href="branching.html">Branching</a>
            <a href="remote-server.html">Remote Server</a>
            <hr />
        </nav>
        
        <div class="big-text-box">
            <h2>Introduction</h2><hr />
            <h3>What is git?</h3>
            Git is a type of version control software that makes it easy for multiple people to collaborate on a codebase. 

            <h3>How does git work?</h3>
            Git works by saving multiple copies of the changed files. This allows software developers to make changes and then reverse those changes if the new code has bugs. Git also tracks when files are changed which simplifies the process of combining multiple versions of code.

            <h3>What is the history of git?</h3>
            Git was originally developed by the Linux development community in 2005 to help streamline the Linux kernel development process.
        </div>
        
        <div class="text-box">
            <h2>Basic Concepts</h2><hr />
            <ul>
                <li><b>Cloning:</b> This is copying the entire codebase locally to your computer.</li>
                <li><b>Origin:</b> The main software release.</li>
                <li><b>Branch:</b> A copy of a the code that allows you to work on a feature without messing with the main code release.</li>
                <li><b>Switch Branch:</b> Look at a different snapshot of the repository.</li>
                <li><b>Merge:</b> Allows you to merge changes from another branch or the origin into the branch you are working on.</li>
                <li><b>Commit:</b> A snapshot of the current state of your branch.</li>
                <li><b>Adding:</b> Which files need to be in this commit.</li>
                <li><b>Pull:</b> Download possible changes in your branch from server/website.</li>
                <li><b>Push:</b> Send local changes on a branch to the server/website.</li>
                <li><b>Repo:</b> Short for repository.</li>
            </ul>
            
        </div>
        
        <div class="big-text-box">
            <h2>Three Steps</h2><hr />
            There are three steps for this tutorial that focus on starting, branching, and working with a remote server.
            
            <ol>
                <li>The <a href="starting.html">starting out</a> section teaches you how to locally start a project and save your progress.</li>
                <li>The <a href="branching.html">branching</a> section teaches you how to create multiple versions of your project and then combine those versions together.</li>
                <li>The <a href="remote-server.html">remote server</a> section teaches you how to pull and push code changes to and from a remote server.</li>
            </ol>
            
            Open up your console window and let's get started.
        </div>
        
        <img src="img/index_page-console.png" alt="Console window with the text git..." /><br>
        
        <button onclick="window.location.href='starting.html'">Start the tutorial &#8594;</button>
        
        <footer>
            <hr />
            CST336 Internet Programming. 2020&copy; Robell<br>
            <a href="https://git-scm.com/downloads/logos">Git Logo</a> by <a href="https://twitter.com/jasonlong">Jason Long</a>.
        </footer>
        
    </body>

</html>