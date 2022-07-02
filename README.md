# README
This is a [child theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/) of the Wordpress theme [Twenty Eleven](http://theme.wordpress.com/themes/twentyeleven/). It was created for [Skyfaller.space](http://skyfaller.space), Nelson's personal homepage. 

## Font
I use @font-face to import an open source font from [The League of Moveable Type](http://www.theleagueofmoveabletype.com/), specifically [Orbitron](http://www.theleagueofmoveabletype.com/orbitron), to use in the header. I used [google-webfonts-helper](https://github.com/majodev/google-webfonts-helper) to download only the style I need from Google Fonts.

I'd like to [de-Google my sites](https://markosaric.com/degoogleify/), and [self-hosting seems to provide better performance than Google Fonts](https://www.tunetheweb.com/blog/should-you-self-host-google-fonts/).

## Transitioning away from GitHub
I am planning to [Give up GitHub](https://sfconservancy.org/GiveUpGitHub/). As part of my migration plan, I will begin using [hydra hosting](https://seirdy.one/posts/2020/11/18/git-workflow-1/), setting up multiple git remotes of equal status. Currently I'm using SourceHut and GitHub, but once I have enough other hosts I'll eliminate GitHub.

You can run `git remote set-url` to switch remote locations if a host goes down. Right now, your two options are:

- https://git.sr.ht/~skyfaller/twentyeleven-skyfaller
- https://github.com/skyfaller/twentyeleven-skyfaller

Collaborators may prefer SSH:

- `git@git.sr.ht:~skyfaller/twentyeleven-skyfaller`
- `git@github.com:skyfaller/twentyeleven-skyfaller.git`
