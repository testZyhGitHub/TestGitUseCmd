<?php
	// git如何恢复本地删除的文件, 直接从本地把文件checkout出来就可以了, 用不着从远程服务器上pull下来, 因为, 所有的历史版本你的本地都有的!!!
	echo "<br>";
	echo "git checkout file";   // 恢复单个文件
	
	# 同时恢复多个被删除的文件：  必须是一次性删除的多个文件, 一个个删除了的话, 必须使用git checkout -- file方式一个个恢复!
	git ls-files -d | xargs -i git checkout {}     
	
	// git pull时出现冲突 放弃本地修改，使远程库内容强制覆盖本地代码
	git fetch --all //只是下载代码到本地，不进行合并操作
	git reset --hard origin/master  //把HEAD指向最新下载的版本
?>