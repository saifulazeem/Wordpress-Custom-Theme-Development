<?php

function wp_fileinfo_customize_register($wp_customize)
{
    $wp_customize->add_panel('wp_fileinfo_settings', array(
        'title' => __('FileInfo Settings'),
        'description' => '',
        'priority'    =>10,
    ));

    $wp_customize->add_section('wp_fileinfo_colors', array(
        'title' => 'Colors',
        'panel' => 'wp_fileinfo_settings',
    ));

    $wp_customize->add_setting('wp_fileinfo_navbar_bkg_color', array(
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'default'       => '#00346E',
        'transport'     => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control('wp_fileinfo_navbar_bkg_color', array(
        'label' => __('Header Background Color'),
        'type'  => 'color',
        'section'   => 'wp_fileinfo_colors',
    ));



    $wp_customize->add_setting('wp_fileinfo_body_bkg_color', array(
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'default'       => '#fff',
        'transport'     => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control('wp_fileinfo_body_bkg_color', array(
        'label' => __('Body Background Color'),
        'type'  => 'color',
        'section'   => 'wp_fileinfo_colors',
    ));





    $wp_customize->add_setting('wp_fileinfo_overall_bkg_color', array(
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'default'       => '#fff',
        'transport'     => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control('wp_fileinfo_overall_bkg_color', array(
        'label' => __('Over all Body Background Color'),
        'type'  => 'color',
        'section'   => 'wp_fileinfo_colors',
    ));


    //new Setting for Footer Text

    $wp_customize->add_setting('wp_fileinfo_footer_color', array(
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'default'       => '#36C8FF',
        'transport'     => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control('wp_fileinfo_footer_color', array(
        'label' => __('Footer Color'),
        'type'  => 'color',
        'section'   => 'wp_fileinfo_colors',
    ));



    //New Section For text

    $wp_customize->add_section('wp_fileinfo_text', array(
        'title' => 'Text',
        'panel' => 'wp_fileinfo_settings',
    ));

        $wp_customize->add_setting('wp_fileinfo_body_text', array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'default'       => 'Browse Extensions Alphabetically',
            'transport'     => 'refresh',
            'sanitize_callback' => 'esc_attr',
        ));

        $wp_customize->add_control('wp_fileinfo_body_text', array(
            'label' => __('Body title'),
            'type'  => 'text',
            'section'   => 'wp_fileinfo_text',
        ));


        //new Setting for Paragraph


        $wp_customize->add_setting('wp_fileinfo_body_paragraph_text', array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'default'       => 'FileInfo contains a searchable database of over 10,000 file extensions
                                with detailed information about the associated file types.You can look
                                up information about unknown file types and find programs that open the files.',
            'transport'     => 'refresh',
            'sanitize_callback' => 'esc_attr',
        ));
    
        $wp_customize->add_control('wp_fileinfo_body_paragraph_text', array(
            'label' => __('Body paragraph'),
            'type'  => 'text',
            'section'   => 'wp_fileinfo_text',
        ));

        
        //new Setting for Footer Text

        $wp_customize->add_setting('wp_fileinfo_footer_text', array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'default'       => '© 2020 All copyrights Reserved',
            'transport'     => 'refresh',
            'sanitize_callback' => 'esc_attr',
        ));
    
        $wp_customize->add_control('wp_fileinfo_footer_text', array(
            'label' => __('Footer Text'),
            'type'  => 'text',
            'section'   => 'wp_fileinfo_text',
        ));





      //new Section For FileType page 

      $wp_customize->add_section('wp_fileinfo_filetype_page_text', array(
        'title' => 'Extensions List Table',
        'panel' => 'wp_fileinfo_settings',
    ));

        //colum1
        $wp_customize->add_setting('wp_fileinfo_table-col1-text', array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'default'       => 'Extension Name',
            'transport'     => 'refresh',
            'sanitize_callback' => 'esc_attr',
        ));

        $wp_customize->add_control('wp_fileinfo_table-col1-text', array(
            'label' => __('Table Column 1 Heading'),
            'type'  => 'text',
            'section'   => 'wp_fileinfo_filetype_page_text',
        ));


        ///column2

        $wp_customize->add_setting('wp_fileinfo_table-col2-text', array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'default'       => 'Extension Type Name',
            'transport'     => 'refresh',
            'sanitize_callback' => 'esc_attr',
        ));

        $wp_customize->add_control('wp_fileinfo_table-col2-text', array(
            'label' => __('Table Column 2 Heading'),
            'type'  => 'text',
            'section'   => 'wp_fileinfo_filetype_page_text',
        ));

            //Extension-1 Table Head Color

            $wp_customize->add_setting('wp_fileinfo_Filetype_table-head-color', array(
                'type'          => 'theme_mod',
                'capability'    => 'edit_theme_options',
                'default'       => '#00346E',
                'transport'     => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color',
            ));

            $wp_customize->add_control('wp_fileinfo_Filetype_table-head-color', array(
                'label' => __(' Table Head Color'),
                'type'  => 'color',
                'section'   => 'wp_fileinfo_filetype_page_text',
            ));


        // new Section For Sidebar Table

        $wp_customize->add_section('wp_fileinfo_sidebar_text', array(
            'title' => 'Sidebar Table',
            'panel' => 'wp_fileinfo_settings',
        ));
    
            //SidebarTable head Text
            $wp_customize->add_setting('wp_fileinfo_table-head-text', array(
                'type'          => 'theme_mod',
                'capability'    => 'edit_theme_options',
                'default'       => 'Browse Extensions Alphabetically',
                'transport'     => 'refresh',
                'sanitize_callback' => 'esc_attr',
            ));
    
            $wp_customize->add_control('wp_fileinfo_table-head-text', array(
                'label' => __('Sidebar Table Heading'),
                'type'  => 'text',
                'section'   => 'wp_fileinfo_sidebar_text',
            ));

            //Sidebar Table Head Color

            $wp_customize->add_setting('wp_fileinfo_table-head-color', array(
                'type'          => 'theme_mod',
                'capability'    => 'edit_theme_options',
                'default'       => '#00346E',
                'transport'     => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color',
            ));
    
            $wp_customize->add_control('wp_fileinfo_table-head-color', array(
                'label' => __('Sidebar Table Heading'),
                'type'  => 'color',
                'section'   => 'wp_fileinfo_sidebar_text',
            ));
}

add_action('customize_register','wp_fileinfo_customize_register');


?>


