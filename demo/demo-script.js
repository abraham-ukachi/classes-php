'use strict';

/*
 * Handler that is called whenever the `<aside>` element is clicked or tapped.
 *
 * @param { PointerEvent } event
 * @param { Element } asideEl
 */
var handleAsideClick = (event, asideEl) => {
  // Get the aside eleemnt as `asideEl`
  //let asideEl = event.target;
  // Check if the aside element is opened using...
  // ...you guessed it ! "A TERNARY STATMENT !!!"
  let isOpened = asideEl.hasAttribute('opened') ? true : false;

  // Do nothing if the aside element is already opened.
  if (isOpened) { return }

  // Open the aside / drawer by setting or adding a 'opened' attribute.
  asideEl.setAttribute('opened', '');

  // DEBUG [4dbsmaster]: tell me about it :)
  // console.log(`[handleAsideClick]: asideEl => `, asideEl);
  // console.log(

};


/*
 * Toggles the Drawer 
 * This method toggles the 'opened' attribute of `<aside id="drawer">`.
 */
var toggleDrawer = (event) => {
  // Stop Propagation of the event
  event.stopPropagation();
  
  // Get the drawer element as `drawerEl`
  let drawerEl = document.getElementById('drawer');

  // Toggle the 'opened' attribute of `drawerEl`
  drawerEl.toggleAttribute('opened');

  // DEBUG [4dbsmaster]: tell me about it :)
  // console.log(`[toggleDrawer](1): drawerEl => `, drawerEl);
  // console.log('[toggleDrawer](2): event => ', event);
};

