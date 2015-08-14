/**
 * Created by HCW on 2015/8/14.
 */
$(function(){
    $('#department-more').click(function(event){
        $('.department-list').append("<li><a href='#'><h4>政府管理学院</h4></a></li>");
    });

    $('#article-more').click(function(event){
        $('.topic-list').append(" <li><div class='topic-head'><h3 align='left'>E-Learning</h3><div class='topic-meta'><span class='author'><a href='#'>gaoyang</a></span> &nbsp;&nbsp;&nbsp;<span>软件学院</span> &nbsp;&nbsp;&nbsp; <span>大二</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>2015年8月15日</span> </div> </div> <hr> <div class='topic-content'> <p>为什么曹二这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢</p> </div> <div class='topic-readmore-btn'> <ul class='list-inline'> <li> <a href='#'> <i title='' class='icon icon-agree' data-original-title='赞同回复'data-toggle='tooltip' data-placement='right'></i> <b class='count'>50</b> </a> </li> <li> <a href='#'> <i title='' class='icon icon-comment' data-original-title='赞同回复'data-toggle='tooltip' data-placement='right'></i> <b class='count'>100</b> </a> </li> <a class='btn btn-default btn-nav' href='{:U('Article/index')}'>阅读全文</a> </ul> </div> </li>");
    });


});
