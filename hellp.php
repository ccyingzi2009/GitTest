1. touch file
2. git status -s 
3. git add.
4. git status -s
5. git diff 尚未缓存的改动(--cached查看以缓存的改动) （HEAD查看已缓存和为缓存的所有改动）
   （--stat显示摘要而非整个diff）
=================================
git基本操作
hjkl 左下上右
G 跳转到最后， gg跳转到段首
$ 跳转到句首， 0 跳转到句尾
i(insert) 游标前 a 游标后

删除操作
x X 删除某个字
dd（delete line） 一行， dw(delete word)单词
dG(段尾) dlG（段首）  D（行尾） D0(行首)

u  ctrl+r 撤销和反撤销

yy 2yy y^ y$ 复制行 复制两行 复制到段首 复制到断尾 

