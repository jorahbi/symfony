define("tree", function(require, exports, module) {

	var Tree = function(){};
	var treeElement;
	Tree.prototype.init = function(selector){
		treeElement = $(selector);
		treeElement.find('i.tree-icon').click(function(e){
			e.stopPropagation();
			e.preventDefault();
			$(this).toggleClass('tree-open');
			$(this).toggleClass('tree-closed');
			$(this).closest('li').find('ul').toggle(function(){});
		});
		treeElement.find('input[type="checkbox"]').uniform();
		this.onRootClick();
		this.onNodeClick();
		this.onLeafClick();
	}


	Tree.prototype.onRootClick = function(){
		
		var _self = this;
		treeElement.find('[ref="tree-root"]').click(function(e){
			e.stopPropagation();
			e.preventDefault();
			var checked = $(this).find('input[type="checkbox"]').is(':checked') ? false : true;
			_self.onChecked($(this).closest('ul.tree-root'), checked);
		});
	}

	Tree.prototype.onNodeClick = function(){
		var _self = this;
		treeElement.find('[ref="tree-node"]').click(function(e){
			e.stopPropagation();
			e.preventDefault();
			var checked = $(this).find('input[type="checkbox"]').is(':checked') ? false : true;
			_self.onChecked($(this).closest('ul.tree-node'), checked);
			checked = checked || _self.isChecked($(this).closest('ul.tree-root'));
			_self.onChecked($(this).closest('ul.tree-root').find('[ref="tree-root"]'), checked);
			
		});
	}

	Tree.prototype.onLeafClick = function(){
		var _self = this;
		treeElement.find('[ref="tree-leaf"]').click(function(e){
			e.stopPropagation();
			e.preventDefault();
			var checked = $(this).find('input[type="checkbox"]').is(':checked') ? false : true;
			var treeNode = $(this).closest('ul.tree-node');
			_self.onChecked($(this), checked);
			checked = checked || _self.isChecked(treeNode);
			_self.onChecked(treeNode.find('[ref="tree-node"]'), checked);
			var treeRoot = $(this).closest('ul.tree-root');
			checked = checked || _self.isChecked(treeRoot);
			_self.onChecked(treeRoot.find('[ref="tree-root"]'), checked);
			
		})
	}

	Tree.prototype.onChecked = function(node, checked){
//debugger
		(checked && (node.find('span').addClass('checked'))) || (node.find('span').removeClass('checked'));
		node.find('input[type="checkbox"]').prop('checked', checked);
	}

	Tree.prototype.isChecked = function(node){
		var checked = false;
		$(node).find('input[type="checkbox"]:not(:first)').each(function(idx, item){
			if($(item).attr('checked') != undefined){
				checked = true;
				return false;
			}
		});
		return checked;
	}
	return {
        name: 'tree',
        module: (new Tree())
    };		
});