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


===========================vim 复制 剪切  粘贴等操作=================================
1. 选定文本块。使用v进入可视模式，移动光标键选定内容。 

2.复制的命令是y，即yank（提起） ，常用的命令如下： 
    y      在使用v模式选定了某一块的时候，复制选定块到缓冲区用； 
    yy    复制整行（nyy或者yny ，复制n行，n为数字）； 
    y^   复制当前到行头的内容； 
    y$    复制当前到行尾的内容； 
    yw   复制一个word （nyw或者ynw，复制n个word，n为数字）； 
    yG    复制至档尾（nyG或者ynG，复制到第n行，例如1yG或者y1G，复制到档尾）  
    
3. 剪切的命令是d，即delete，d与y命令基本类似，所以两个命令用法一样，包括含有数字的用法.  
    d      剪切选定块到缓冲区； 
    dd    剪切整行 
    d^    剪切至行首 
    d$     剪切至行尾 
    dw    剪切一个word 
    dG     剪切至档尾  
    
4. 粘贴的命令式p，即put（放下） 
    p      小写p代表贴至游标后（下），因为游标是在具体字符的位置上，所以实际是在该字符的后面 
    P      大写P代表贴至游标前（上） 
    整行的复制粘贴在游标的上（下）一行，非整行的复制则是粘贴在游标的前（后）

注： 
     在正则表达式中，^表示匹配字符串的开始位置，$表示匹配字符串的结束位置。 
     命令前面加数字表示重复的次数，加字母表示使用的缓冲区名称。使用英文句号"."可以重复上一个命令。 
     在复制粘贴时，另一组常用的命令是u（撤销操作），U（撤销某一行最近所有修改），Ctrl+R（重做），这些功能主要是vim中的，vi中略有差别

