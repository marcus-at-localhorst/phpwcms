//MooTools More, <http://mootools.net/more>. Copyright (c) 2006-2009 Aaron Newton <http://clientcide.com/>, Valerio Proietti <http://mad4milk.net> & the MooTools team <http://mootools.net/developers>, MIT Style License.

HtmlTable=Class.refactor(HtmlTable,{options:{sortIndex:0,sortReverse:false,parsers:[],defaultParser:"string",classSortable:"table-sortable",classHeadSort:"table-th-sort",classHeadSortRev:"table-th-sort-rev",classNoSort:"table-th-nosort",classGroupHead:"table-tr-group-head",classGroup:"table-tr-group",classCellSort:"table-td-sort",classSortSpan:"table-th-sort-span",sortable:false},initialize:function(){this.previous.apply(this,arguments);if(this.occluded){return this.occluded}this.sorted={index:null,dir:1};this.bound={headClick:this.headClick.bind(this)};this.sortSpans=new Elements();if(this.options.sortable){this.enableSort();if(this.options.sortIndex!=null){this.sort(this.options.sortIndex,this.options.sortReverse)}}},attachSorts:function(a){this.element[$pick(a,true)?"addEvent":"removeEvent"]("click:relay(th)",this.bound.headClick)},setHeaders:function(){this.previous.apply(this,arguments);if(this.sortEnabled){this.detectParsers()}},detectParsers:function(c){if(!this.head){return}var a=this.options.parsers,b=this.body.rows;this.parsers=$$(this.head.cells).map(function(d,e){if(!c&&(d.hasClass(this.options.classNoSort)||d.retrieve("htmltable-sort"))){return d.retrieve("htmltable-sort")}var g=new Element("span",{html:"&#160;","class":this.options.classSortSpan}).inject(d,"top");this.sortSpans.push(g);var h=a[e],f;switch($type(h)){case"function":h={convert:h};f=true;break;case"string":h=h;f=true;break}if(!f){HtmlTable.Parsers.some(function(n){var l=n.match;if(!l){return false}if(Browser.Engine.trident){return false}for(var m=0,k=b.length;m<k;m++){var o=b[m].cells[e].get("html").clean();if(o&&l.test(o)){h=n;return true}}})}if(!h){h=this.options.defaultParser}d.store("htmltable-parser",h);return h},this)},headClick:function(c,b){if(!this.head){return}var a=Array.indexOf(this.head.cells,b);this.sort(a);return false},sort:function(f,h,m){if(!this.head){return}m=!!(m);var l=this.options.classCellSort;var o=this.options.classGroup,t=this.options.classGroupHead;if(!m){if(f!=null){if(this.sorted.index==f){this.sorted.reverse=!(this.sorted.reverse)}else{if(this.sorted.index!=null){this.sorted.reverse=false;this.head.cells[this.sorted.index].removeClass(this.options.classHeadSort).removeClass(this.options.classHeadSortRev)}else{this.sorted.reverse=true}this.sorted.index=f}}else{f=this.sorted.index}if(h!=null){this.sorted.reverse=h}var d=document.id(this.head.cells[f]);if(d){d.addClass(this.options.classHeadSort);if(this.sorted.reverse){d.addClass(this.options.classHeadSortRev)}else{d.removeClass(this.options.classHeadSortRev)}}this.body.getElements("td").removeClass(this.options.classCellSort)}var c=this.parsers[f];if($type(c)=="string"){c=HtmlTable.Parsers.get(c)}if(!c){return}if(!Browser.Engine.trident){var b=this.body.getParent();this.body.dispose()}var s=Array.map(this.body.rows,function(v,j){var u=c.convert.call(document.id(v.cells[f]));return{position:j,value:u,toString:function(){return u.toString()}}},this);s.reverse(true);s.sort(function(j,i){if(j.value===i.value){return 0}return j.value>i.value?1:-1});if(!this.sorted.reverse){s.reverse(true)}var p=s.length,k=this.body;var n,r,a,g;while(p){var q=s[--p];r=q.position;var e=k.rows[r];if(e.disabled){continue}if(!m){if(g===q.value){e.removeClass(t).addClass(o)}else{g=q.value;e.removeClass(o).addClass(t)}if(this.zebra){this.zebra(e,p)}e.cells[f].addClass(l)}k.appendChild(e);for(n=0;n<p;n++){if(s[n].position>r){s[n].position--}}}s=null;if(b){b.grab(k)}return this.fireEvent("sort",[k,f])},reSort:function(){if(this.sortEnabled){this.sort.call(this,this.sorted.index,this.sorted.reverse)}return this},enableSort:function(){this.element.addClass(this.options.classSortable);this.attachSorts(true);this.detectParsers();this.sortEnabled=true;return this},disableSort:function(){this.element.remove(this.options.classSortable);this.attachSorts(false);this.sortSpans.each(function(a){a.destroy()});this.sortSpans.empty();this.sortEnabled=false;return this}});HtmlTable.Parsers=new Hash({date:{match:/^\d{2}[-\/ ]\d{2}[-\/ ]\d{2,4}$/,convert:function(){return Date.parse(this.get("text")).format("db")},type:"date"},"input-checked":{match:/ type="(radio|checkbox)" /,convert:function(){return this.getElement("input").checked}},"input-value":{match:/<input/,convert:function(){return this.getElement("input").value}},number:{match:/^\d+[^\d.,]*$/,convert:function(){return this.get("text").toInt()},number:true},numberLax:{match:/^[^\d]+\d+$/,convert:function(){return this.get("text").replace(/[^-?^0-9]/,"").toInt()},number:true},"float":{match:/^[\d]+\.[\d]+/,convert:function(){return this.get("text").replace(/[^-?^\d.]/,"").toFloat()},number:true},floatLax:{match:/^[^\d]+[\d]+\.[\d]+$/,convert:function(){return this.get("text").replace(/[^-?^\d.]/,"")},number:true},string:{match:null,convert:function(){return this.get("text")}},title:{match:null,convert:function(){return this.title}}});