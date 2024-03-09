from flask import Flask, render_template
from kubernetes import client, config

app = Flask(__name__)

def get_all_pods():
    # Charger la configuration Kubernetes à partir du fichier kubeconfig par défaut
    config.load_incluster_config()

    # Créer un objet API client Kubernetes
    api_instance = client.CoreV1Api()

    # Récupérer tous les pods
    pods = api_instance.list_pod_for_all_namespaces(watch=False)
    
    return pods

@app.route('/')
def index():
    # Récupérer la liste des pods de tous les namespaces
    try:
        pods = get_all_pods()
    except Exception as e:
        return f"Error: {e}"
        
    # Formater les données pour l'affichage dans le template HTML
    formatted_pods = []
    for pod in pods.items:
        formatted_pods.append({
            'namespace': pod.metadata.namespace,
            'name': pod.metadata.name,
            'status': pod.status.phase,
            'ip': pod.status.pod_ip
        })

    # Rendre le template HTML avec les données des pods
    return render_template('index.html', pods=formatted_pods)

if __name__ == '__main__':
    app.run(debug=True)
