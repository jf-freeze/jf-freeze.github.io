cd ".\github\jf-freeze.github.io"
git pull
xcopy ..\..\clanstats.html . /y
git add clanstats.html
git commit -m %1
git push