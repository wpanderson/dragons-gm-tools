<?php
/**
 * Created by PhpStorm.
 * User: wpanderson
 * Date: 11/27/18
 * Time: 5:19 PM
 *
 * Main paige controller for the GM. Allows for more control and view of tools.
 *
 */

namespace App\Controller;


class GmController extends AppController
{
    // Naming this function index allows us to redirect users through routing to the gm_index
    public function gmindex()
    {

        // simple command to render a template of the name "gmindex.ctp"
        $this->render();
    }

}
