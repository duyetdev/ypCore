<?php 
class Controller_Admin_News_Newpost extends ypAdminController {
	public function Index() {
		$this->checkLogin();

		$this->loadLanguage('Admin/News/Newpost');

		// Edit post, load from id
		$post = FALSE;
		if (isset($this->Request->GET['post_id']) AND (int) $this->Request->GET['post_id'] > 0) {
			$postId = (int) $this->Request->GET['post_id'];
			$this->Loader->model('Admin/News/Edit');
			$post = $this->Model_Admin_News_Edit->loadPost($postId);
		}
		if ($post) {
			$this->set('post', $post);
		}

		$this->set('form_action', $this->Link->build('Admin/News/Newpost/Progress'));
		$this->set('ajax_newpost_url', $this->Link->build('Admin/News/Ajax/Getalias', TRUE, array('title' => '')));
		$this->set('editor', $this->Setting->get('editor'));
		$this->Loader->model('Admin/News/Newpost');

		// ===============
		$this->setTemplate('module/News/Newpost.php');
		$this->Document->setTitle($this->_data['title']);
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer'
		));
		$this->Response->setOutput($this->render());
	}

	/**
	 * Progress save new post or edit post.
	 *
	 * @access 	public
	 * @author 	LdDuit
	 * @date 	unknow
	 */
	public function Progress() {
		$this->checkLogin();

		if (!$this->Request->POST) {
			$this->redirect($this->Link->build('Admin/News/Index', TRUE));
		}

		$this->loadLanguage('Admin/News/Progress');

		$this->Loader->helper('string');
		$this->_data['error'] = '';
		$this->_data['post']['title'] = htmlspecialchars((string) $this->Request->POST['post_title']);
		$this->_data['post']['title_alias']	= (!empty($this->Request->POST['title_alias'])) ? $this->Request->POST['title_alias'] : createAlias($this->_data['post']['title']);
		$this->_data['post']['post_id'] = (int) $this->Request->POST['post_id'];
		$this->_data['post']['post'] = htmlspecialchars((string) $this->Request->POST['post_content']);
		$this->_data['post']['keyword']	= htmlspecialchars((string) $this->Request->POST['keyword']);
		$this->_data['post']['tag']	= htmlspecialchars($this->_fixTag($this->Request->POST['tag']));
		$this->_data['post']['editor'] = htmlspecialchars(trim($this->Request->POST['editor']));
		$this->_data['post']['save'] = $this->Request->POST['submit'] != 'publish-now' ? 0 : 1;

		if (strlen($this->_data['post']['title']) < 5 OR strlen($this->_data['post']['title']) > 150) {
			$this->_data['error'] = $this->_data['error_title_strlen'];
		} else {
			$this->Loader->model('Admin/News/Progress');
			$tags = array_map('trim', explode(',', $this->_data['post']['tag']));
			$this->_data['post']['user'] = $this->User->getData();
			$postId = $this->Model_Admin_News_Progress->addPost($this->_data['post']);
			if (!$postId) {
				// Add post fail
				$this->_data['error'] = $this->_data['error_add_post_fail'];
			} else {
				// Delete cache 
				$this->Cache->delete('postInIndex');
				$this->set('redirect_to', $this->Link->build('Admin/News/Index'));
				$this->setTemplate('layout/Redirect.php');
				$this->Response->setOutput($this->render());
				return;
			}
		}

		if (!empty($this->_data['error'])) {
			$this->set('error', $this->_data['error']);
			$this->set('post', $this->_data['post']);

			$this->loadLanguage('Admin/News/Newpost');
			$this->set('form_action', $this->Link->build('Admin/News/Newpost/Progress'));
			$this->Loader->model('Admin/News/Newpost');
			$this->setTemplate('module/News/Newpost.php');
			$this->Document->setTitle($this->_data['title']);
			$this->setTemplateChild(array(
				'Admin/System/Header',
				'Admin/System/Footer'
			));
			$this->Response->setOutput($this->render());
		}
	}

	/**
	 * Fix tags input
	 * 
	 * @access 	private
	 * @author 	Lvduit
	 * @date 	5/2/2014 23:04
	 */
	private function _fixTag($tag = '') {
        $tag = trim($tag);
        if (empty($tag)) return $tag;

        $tag = preg_replace('/([,]+)/', ',', $tag);
        $tag = preg_replace('/^[,]/', '', $tag);
        $tag = preg_replace('/[,]$/', '', $tag);

        $tag = explode(',', $tag);

        $fill_array = array();
        foreach ($tag as $each) {
            $each = trim($each);
            if (!empty($each)) $fill_array[] = $each;
        }

        $tag = implode(', ', $fill_array);

        return $tag;
	}
}