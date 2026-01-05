// dropdown menu logic
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('menuBtn') as HTMLButtonElement | null
    const menu = document.getElementById('menu') as HTMLElement | null
    const overlay = document.getElementById('overlay') as HTMLElement | null

    // Stop if any required element is missing
    if (!btn || !menu || !overlay) return
    // else
    console.debug('Navbar TS loaded')

    const openMenu = (): void => {
        menu.classList.remove('hidden')
        overlay.classList.remove('hidden')
        menu.scrollTop = 0 // reset scroll on open
    }

    const closeMenu = (): void => {
        menu.classList.add('hidden')
        overlay.classList.add('hidden')
    }

    btn.addEventListener('click', openMenu)
    overlay.addEventListener('click', closeMenu)
})
