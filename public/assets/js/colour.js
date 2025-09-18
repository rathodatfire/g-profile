$(document).ready(function () {
  // Function to update styles
  function updateStyle(selector, property, value) {
    const styleElement = $('#dynamicStyles')
    let newStyle = `${selector} { ${property}: ${value}; }`

    // Add !important for header-font class
    if (selector === '.header-font' && property === 'color') {
      newStyle = `${selector} { ${property}: ${value} !important; }`
    }

    // Remove existing style rule for the selector if it exists
    const existingStyleRegex = new RegExp(`${selector}\\s*{[^}]*}`)
    styleElement.text(styleElement.text().replace(existingStyleRegex, ''))

    // Append the new style rule
    styleElement.append(newStyle)
  }

  // Check if colors are already stored in local storage and update styles
  const sideBarBackground = localStorage.getItem('sidebarBackgroundColor')
  if (sideBarBackground) {
    updateStyle('.sidebar-background', 'background-color', sideBarBackground)
    $('#sideBarBackGroundPicker').val(sideBarBackground)
  }

  const sideBarFontColor = localStorage.getItem('sidebarFontColor')
  if (sideBarFontColor) {
    updateStyle('.sidebar-font', 'color', sideBarFontColor)
    $('#sideBarFontPicker').val(sideBarFontColor)
  }

  const headerBackground = localStorage.getItem('headerBackgroundColor')
  if (headerBackground) {
    updateStyle('.header-background', 'background-color', headerBackground)
    $('#headerBackGroundPicker').val(headerBackground)
  }

  const headerFontColor = localStorage.getItem('headerFontColor')
  if (headerFontColor) {
    updateStyle('.header-font', 'color', headerFontColor)
    $('#headerFontPicker').val(headerFontColor)
  }

  // Handle background color picker change for sidebar
  $('#sideBarBackGroundPicker').on('input', function () {
    const selectedBackgroundColor = $(this).val()
    updateStyle(
      '.sidebar-background',
      'background-color',
      selectedBackgroundColor,
    )
    localStorage.setItem('sidebarBackgroundColor', selectedBackgroundColor)
  })

  // Handle font color picker change for sidebar
  $('#sideBarFontPicker').on('input', function () {
    const selectedFontColor = $(this).val()
    updateStyle('.sidebar-font', 'color', selectedFontColor)
    localStorage.setItem('sidebarFontColor', selectedFontColor)
  })

  // Handle background color picker change for header
  $('#headerBackGroundPicker').on('input', function () {
    const selectedBackgroundColor = $(this).val()
    updateStyle(
      '.header-background',
      'background-color',
      selectedBackgroundColor,
    )
    localStorage.setItem('headerBackgroundColor', selectedBackgroundColor)
  })

  // Handle font color picker change for header
  $('#headerFontPicker').on('input', function () {
    const selectedFontColor = $(this).val()
    updateStyle('.header-font', 'color', selectedFontColor)
    localStorage.setItem('headerFontColor', selectedFontColor)
  })
})
