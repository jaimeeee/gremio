( ($) ->

  class Gremiodiseno
    @init: ->
      @imageFillInit()
      
      $('#nav-toggle').click (e) ->
        e.preventDefault()
        $('nav').slideToggle()
        return
      
      $('nav > ul > li > a').click (e) ->
        if $(this).parent().find('ul').length
          e.preventDefault()
          
          $(this).parent().find('ul').slideToggle()
        
        return
      
      return
    
    @imageFillInit: ->
      
      @imageFillResize()
      
      $(window).load =>
        @imageFillResize()
        return
      
      $(window).resize =>
        @imageFillResize()
        return
      
      return
    
    @imageFillResize: (setContainerPosition) ->
      
      $('.image-fill').each ->
        
        $container = $(this).parent()
        $image = $(this)
        
        # Set the position for each element so it moves freely
        $container.css('position', 'relative') if setContainerPosition?
        $image.css('position', 'absolute')
        
        b = $container.width() / $image.attr('data-width')
        c = Math.round($image.attr('data-height') * b)
        d = $container.height() / $image.attr('data-height')
        e = Math.round($image.attr('data-width') * d)
        
        if e > $container.width()
          $image.width(e)
          $image.height($container.height())
          $image.css('left', Math.round((e - $container.width()) / 2) * -1)
          $image.css('top', 0)
        else
          $image.height(c)
          $image.width($container.width())
          $image.css('left', 0)
          $image.css('top', Math.round((c - $container.height()) / 2) * -1)
        
        return
      
      return
    
    @projectInit: ->
      $('#project-grid').masonry({
        itemSelector: '.project-item'
        percentPosition: true
        columnWidth: '.grid-sizer'
        transitionDuration: 0
      })
      
      # New fancybox
      items = []
      $('.project-item').each ->
        image = {
          src: $(this).find('img').attr('src')
          w: $(this).find('img').attr('data-width')
          h: $(this).find('img').attr('data-height')
        }
        items.push(image)
      
      console.log(items)
      
      $('.project-item a').click (e) ->
        e.preventDefault()
        
        gallery = new PhotoSwipe(
          document.querySelectorAll('.pswp')[0],
          PhotoSwipeUI_Default,
          items,
          {
            index: $(this).parent().index() - 1
          }
        )
        gallery.init()
    
    @projectsInit: ->
      $('#projects-grid').masonry({
        itemSelector: '.project-item'
        percentPosition: true
        columnWidth: '.grid-sizer'
        transitionDuration: 0
      })
    
    @staffInit: ->
      $('.staff-member').hover ->
        console.log('mouseover')
        
        if $(this).find('.card').hasClass('right')
          $(this).find('.card').stop().animate({
            left: '-100%'
            padding: '10px 16px'
            width: '100%'
          }, 200)
        else
          $(this).find('.card').stop().animate({
            padding: '10px 16px'
            width: '100%'
          }, 200)
        
        return
      , ->
        console.log('mouseout')
        
        if $(this).find('.card').hasClass('right')
          $(this).find('.card').stop().animate({
            left: 0
            padding: '10px 0px'
            width: '0px'
          }, 200)
        else
          $(this).find('.card').stop().animate({
            padding: '10px 0px'
            width: '0px'
          }, 200)
        
        return
    
  window.gremiodiseno = Gremiodiseno

  $(document).ready ->
    Gremiodiseno.init()
    return
) jQuery
