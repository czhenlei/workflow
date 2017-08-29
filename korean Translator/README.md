# Korean Translator

It is a simple workflow.



## Some Reasons

* Boring
* Be afraid of trouble


## The Keys
Here are some keys to make the workflow, just mark it to help me understand the workflow.

### Use
添加到alfred后，在脚本中添加自己的appid等信息即可！

### Redirect
시,还是中文来的爽！重定向发生了两次！重定向是连续的～～

*  Inputs模块中xml数据中arg属性的值，将传递至Actions模块中的query字段。(当然，这里需要触发，比如enter或ctrl+enter)

* Actions模块中的标准输出重定向到Outputs模块中的query字段。



### Workflows.php
唉,站在巨人的肩膀上～～

* url拼接,额～pass
* 数据解析,额～

```
$suggestions = $w->request($url);
//数组形式解析数据
$suggestions = json_decode($suggestions,true);

```
* 生成xml

```
//函数使用自行看workflows.php文件
$w->result(round(111221,10), $query, $suggestions['trans_result'][0]['dst'], $suggestions['from'], $icon);
echo $w->toxml();

```
## postscript
以上只是自己的理解，有问题求赐教！很焦灼～～～