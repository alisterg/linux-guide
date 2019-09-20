# GH Pages deploy

1) Checkout master; make fixes
2) Run npm build
3) Copy the dist/ directory somewhere
4) Checkout gh-pages
5) Replace the root repo contents with the previous dist/ directory's contents
6) Push