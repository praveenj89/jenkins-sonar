pipeline {
    agent any

    tools {
        sonarScanner 'SonarScanner'
    }

    stages {

        stage('Checkout') {
            steps {
                git 'https://github.com/praveenj89/jenkins-sonar.git'
            }
        }

        stage('Build') {
            steps {
                sh 'mvn clean install'
            }
        }

        stage('SonarQube Analysis') {
            steps {
                withSonarQubeEnv('SonarQube') {
                    sh 'mvn sonar:sonar'
                }
            }
        }
    }
}
